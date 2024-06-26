<?php
/**
 * The base class for filter controls
 */
class FilterControl
{
	protected $id;
	
	protected $fName;
	
	protected $gfName;
	
	protected $tName; 
	
	protected $pSet;
	
	protected $totals;
	
	protected $useTotals;
	
	protected $multiSelect;
		
	protected $cipherer;
	
	protected $filteredFields;

	protected $filtered = false;
	
	protected $totalsfName;
	
	protected $strSQL;

	/**
	 * can be NULL
	 */
	protected $viewControl;
	
	protected $visible = true;
	
	protected $filterFormat;
	
	protected $useApllyBtn = false;
	
	protected $separator = '~~';
	
	/**
	 * can be NULL
	 */
	protected $totalViewControl;
	
	protected $showCollapsed = false;
	
	protected $whereComponents;
	
	protected $fieldType;
	
	protected $valuesObtainedFromDB = array();
			
	protected $onDemandHiddenItemClassName = "filter-hidden";		
	
	/**
	 * @type Connection
	 */
	protected $connection;
	protected $dataSource;
	
	public $dependent = false;	
	
	public $parentFilterName = "";

	public $pageObject;

	protected $parentFiltersNames = array();
	
	
	public function __construct($fName, $pageObj, $id, $viewControls)
	{		
		$this->pageObject = $pageObj;
		$this->id = $id;
		$this->fName = $fName;
		$this->gfName = GoodFieldName($this->fName);
		$this->tName = $pageObj->tName;
		$this->connection = $pageObj->connection;
		$this->dataSource = $pageObj->getDataSource();
		
		$this->pSet = $pageObj->pSet;
		$this->cipherer = $pageObj->cipherer;
		
		$this->totals = $this->pSet->getFilterFieldTotal($fName);
		$this->totalsfName = $this->pSet->getFilterTotalsField($fName);
		if(!$this->totalsfName || $this->totals == FT_COUNT) 
			$this->totalsfName = $this->fName;
		
		$this->useTotals = $this->totals != FT_NONE;
		
		$this->multiSelect = $this->pSet->getFilterFiledMultiSelect($fName);	
		

		$this->filteredFields = $pageObj->searchClauseObj->getFilteredFields(); 
		$this->fieldType = $this->pSet->getFieldType($this->fName);
		
		if( !!$this->filteredFields[ $this->fName ] )
			$this->filtered = true;
			
		$this->assignViewControls($viewControls);

		$this->showCollapsed = $this->pSet->showCollapsed($this->fName);
	}

	/**
	 * Get and assign view controls for the filter's and total fields
	 * @param object pageObj
	 */	
	protected function assignViewControls($viewControls) 
	{
		if( !$viewControls ) {
			return;
		}
		$this->viewControl = $viewControls->getControl($this->fName);
		//prevent filter's values from highlighting
		$this->viewControl->searchHighlight = false;
		//prevent filter's values from truncating
		$this->viewControl->isUsedForFilter = true;
		
		if($this->totals == FT_MIN || $this->totals == FT_MAX)
		{
			$this->totalViewControl = $viewControls->getControl($this->totalsfName);
			//prevent filter's values from highlighting
			$this->totalViewControl->searchHighlight = false;
			//prevent filter's values from truncating
			$this->totalViewControl->isUsedForFilter = true;
		}
	}

	/**
	 * Add filter control's data to the ControlsMap
	 * @param Object pageObj
	 */
	public function addFilterControlToControlsMap($pageObj)
	{
		$ctrlsMap = $this->getBaseContolsMapParams();		
		$pageObj->controlsMap["filters"]["controls"][] = $ctrlsMap;	
	}

	/**
	 * Get filter control's base ControlsMap array
	 * @return array
	 */	
	protected function getBaseContolsMapParams()
	{
		$ctrlsMap = array();
		$ctrlsMap['fieldName'] = $this->fName;
		$ctrlsMap['gfieldName'] = $this->gfName;
		$ctrlsMap['filterFormat'] = $this->filterFormat;
		$ctrlsMap['multiSelect'] = $this->multiSelect;
		$ctrlsMap['filtered'] = $this->filtered;
		$ctrlsMap['separator'] = $this->separator;
		$ctrlsMap['collapsed'] = $this->showCollapsed;
		
		if( $this->filtered )
		{
			$ctrlsMap['defaultValuesArray'] = $this->filteredFields[ $this->fName ]["values"];
			$ctrlsMap['defaultShowValues'] = array();
			foreach( $ctrlsMap['defaultValuesArray'] as $dv )
			{
				$ctrlsMap['defaultShowValues'][] = $this->getValueToShow( $dv );
			}
		}
		
		return $ctrlsMap;	
	}
	
	
	/**
	 * The stub. It's overrided in the children classes
	 */
	protected function getValueToShow($value) 
	{
	}
	
	/**
	 * Get the total field value
	 * @param String totalValue
	 * @return String
	 */
	protected function getTotalValueToShow($totalValue)
	{
		if($this->totals == FT_MIN || $this->totals == FT_MAX) 
		{
			$totalData = array( $this->totalsfName => $totalValue );
			$totalValue = $this->totalViewControl->showDBValue($totalData, "");
		}
		return $totalValue;
	}
	
	/**
	 * Get the Filter's control block data.
	 * @param Object pageObj
	 * @param Array $dFilterBlocks (optional)
	 * @return Array
	 */	
	public function buildFilterCtrlBlockArray( $pageObj, $dFilterBlocks = null )
	{
		$this->addFilterControlToControlsMap($pageObj);
		
		$filterCtrlBlocks = array();
		
		if($this->multiSelect != FM_ALWAYS && $this->filtered) 
		{
			$filterCtrlBlocks = $this->getFilteredFilterBlocks();
			
			if($this->multiSelect == FM_NONE)
				return $filterCtrlBlocks;
		}

		$this->addFilterBlocksFromDB($filterCtrlBlocks);

		if( $this->multiSelect != FM_NONE && $this->filtered )
			$this->addOutRangeValuesToFilter($filterCtrlBlocks);		
		
		if( !$filterCtrlBlocks )
			$this->visible = false;
		
		$this->extraBlocksProcessing($filterCtrlBlocks);
		
		return $filterCtrlBlocks;
	}

	/**
	 * Update filter blocks structures
	 * @param &Array
	 */
	protected function extraBlocksProcessing( &$filterCtrlBlocks )
	{
		$this->sortFilterBlocks($filterCtrlBlocks);
	}
	
	/**
	 * The stub. It could be overrided in the children classes
	 */
	protected function sortFilterBlocks( &$filterCtrlBlocks )
	{
	}
	
	/**
	 * A stub
	 * @return Boolean
	 */
	protected function isTruncated()
	{
		return false;
	}
	
	/**
	 * Usort callback function comparing filter blocks 
	 * basing on db numeric values
	 */
	static function compareBlocksByNumericValues( $block1, $block2 )
	{
		if( $block1["sortValue"] < $block2["sortValue"] )
			return -1;
			
		if( $block1["sortValue"] > $block2["sortValue"] )
			return 1;			
		
		return 0;
	}

	/**
	 * Usort callback function comparing filter blocks
	 * basing on db or formatted values	 
	 */
	static function compareBlocksByStringValues( $block1, $block2 )
	{
		$sortValue1 = (string)$block1["sortValue"];
		$sortValue2 = (string)$block2["sortValue"];
		
		$caseCompareResult = strcasecmp($sortValue1, $sortValue2);
		if($caseCompareResult == 0)
			return -strcmp($sortValue1, $sortValue2);
		
		return $caseCompareResult;
	}
	
	/**
	 * Get the multiselect filters' filterblocks for values 
	 * that are out of range. And add them to the existing filter blocks
	 * @param &Array filterCtrlBlocks
	 */
	protected function addOutRangeValuesToFilter(&$filterCtrlBlocks)
	{
		$visibilityClass = $this->multiSelect == FM_ON_DEMAND ? $this->onDemandHiddenItemClassName : "";
		
		foreach( $this->filteredFields[ $this->fName ]["values"] as $value)
		{
			if(in_array($value, $this->valuesObtainedFromDB))
				continue;
				
			$filterControl = $this->buildControl( array($this->fName => $value) );
			$filterCtrlBlocks[] = $this->getFilterBlockStructure($filterControl, $visibilityClass, $value);
		}
	}
	
	/**
	 * Get the arrray with keys corresponding to filter blocks markup
	 * @param String filterControl
	 * @param String visibilityClass
	 * @param String value		The raw Db field's value
	 * @param Array parentFiltersData (optional)	 
	 * @return Array
	 */
	protected function getFilterBlockStructure( $filterControl, $visibilityClass = "", $value = "", $parentFiltersData = array() )
	{
		return array($this->gfName."_filter" => $filterControl, "visibilityClass_".$this->gfName => $visibilityClass);
	}
	
	/**
	 * Get the filtered not multiselect filter's control block
	 * @return Array
	 */
	protected function getFilteredFilterBlocks()
	{
		$filterControl = array();
		foreach($this->filteredFields[ $this->fName ]["values"] as $value)
		{
			$showValue = $this->getControlCaption( $value );
			$delButtonHtml = $this->getDelButtonHtml($this->gfName, $this->id, $value);
			$filterControl = '<span>'.$delButtonHtml.$showValue.'</span>';
			$parentFiltersData = $this->getParentFiltersDataForFilteredBlock($value);
			$classes = 'filter-ready-value'.( $this->multiSelect == FM_ON_DEMAND ? ' ondemand' : '' );
			$filterCtrlBlocks[] = $this->getFilterBlockStructure($filterControl, $classes, $value, $parentFiltersData);
		}
		
		return $filterCtrlBlocks;
	}
	
	protected function getControlCaption( $value )
	{
		return $this->getValueToShow($value);
	}
	
	/**
	 * A stab for not dependent filters
	 * @param String
	 * @return Array
	 */
	protected function getParentFiltersDataForFilteredBlock($value)
	{
		return array();
	}
	
	/**
	 * The stub. It's overrided in the children classes
	 */
	protected function addFilterBlocksFromDB(&$filterBlocks)
	{
	}

	/**
	 * Get the markup representing a control on the page
	 * @param String value
	 * @param String showValue
	 * @param String dataValue
	 * @param String totalValue
	 * @param String separator
	 * @param Array parentFiltersData
	 * @return String
	 */
	protected function getControlHTML($value, $showValue, $dataValue, $totalValue, $separator, $parentFiltersData = null) 
	{
		$filterControl = '';
		$encodeDataValue = runner_htmlspecialchars($dataValue);
		$dataValueAttr = 'data-filtervalue="'.$encodeDataValue.'"';
		
		$extraDataAttrs = $this->getExtraDataAttrs($parentFiltersData);
		
		$pageType = 'list';
		if( isReport( $this->pSet->getEntityType() ) )
			$pageType = 'report';
		else if( isChart( $this->pSet->getEntityType() ) )
			$pageType = 'chart';
		
		if($this->multiSelect != FM_NONE)
		{
			$style = $this->filtered || $this->multiSelect == FM_ALWAYS ? '' : 'style="display: none;"';
			$checkedAttr = $this->getCheckedAttr( $value, $parentFiltersData );
						
			$checkBox = '<input type="checkbox" '.$checkedAttr.' name="f[]" value="'.$encodeDataValue.'" '
				.$extraDataAttrs.' class="multifilter-checkbox filter_'.$this->gfName.'_'.$this->id.'" '.$style.'>';	
		}
		if($this->multiSelect != FM_ALWAYS) 
		{
			$href = GetTableLink( GetTableURL($this->tName), $pageType, 'f=('.runner_htmlspecialchars( rawurlencode( $this->fName ) ).
			$separator.$encodeDataValue.')' );
			$hrefAttr = 'href="'.$href.'"';
			$label = $checkBox . ' ' .$showValue;
		} 
		else
		{
			$label = $checkBox . ' <span>'.$showValue.'</span>';
		}
			
		if($this->useTotals && $totalValue != "")
			$label .= ' <span dir="LTR">('.$totalValue.')</span>';

		$labelAttrs = implode( " ", array( $hrefAttr, $dataValueAttr, $extraDataAttrs ) );
		$label = '<a '.$labelAttrs.' class="'.$this->gfName.'-filter-value">' . $label . "</a>";
		
		$filterControl.= $label;
//		$filterControl.= '<span>'.$label.'</span>';
		
		return $filterControl;		
	}

	/**
	 * A stub for not dependat filters
	 * @param Array parentFiltersData 
	 * @return String
	 */
	protected function getExtraDataAttrs( $parentFiltersData )
	{
		return '';
	}
	
	/**
	 * Get the cheked attribute string for a multiselect filter control
	 * @return String
	 */
	protected function getCheckedAttr( $value, $parentFiltersData = null )
	{
		if( $this->multiSelect == FM_NONE || $this->filtered && !in_array($value, $this->filteredFields[ $this->fName ]['values']) )
			return '';
		
		return 'checked="checked"';
	}
	
	/**
	 * Get the filter's buttons parameters such as buttons' labels, 
	 * class names and attributes
	 * @param Array dBtnParams (optional)	 
	 * @return Array
	 */
	public function getFilterButtonParams( $dBtnParams = null )
	{	
		return array( 
			'attrs' => 'id="filter_'.$this->gfName.'_'.$this->id.'"', 
			'hasMultiselectBtn' => $this->multiSelect == FM_ON_DEMAND,
			'hasApplyBtn' => $this->useApllyBtn
		);		
	}
	
	/**
	 * Get the filter's state array, 
	 * @return Array
	 */	
	public function getFilterState()
	{
		return array(
			"visible" => $this->visible,
			"filtered" => $this->filtered,
			"collapsed" => $this->showCollapsed,
			"truncated" => $this->isTruncated(),
			"showMoreHidden" => $this->isShowMoreHidden()
		);
	}
	
	/**
     * Check if the "show more" button must be hidden by class attr
	 * @return Boolean
	 */
	protected function isShowMoreHidden()
	{
		return false;
	}
	
	/**
	 * Get the filter's extra controlls parameters
	 * @param Array dBtnParams (dExtraCtrls)	 
	 * @return Array
	 */	
	public function getFilterExtraControls( $dExtraCtrls = null )
	{
		$selectAllAttrs = "";
		if( !$this->filtered && $this->multiSelect !== FM_NONE)
			$selectAllAttrs = 'checked="checked"';
		
		if( $this->multiSelect == FM_ON_DEMAND )
			$selectAllAttrs.= ' style="display: none;"';
		
		return array(
			"showValue" => $this->getShowValue(),
			"filtered" => $this->filtered,
			"selectAllAttrs" => $selectAllAttrs,
			"numberOfExtraItemsToShow" => $this->getNumberOfExtraItemsToShow()
		);
	}
	
	/**
	 * A stub
	 * @return Number
	 */
	protected function getNumberOfExtraItemsToShow()
	{
		return 0;
	}
	
	/**
	 * Check if the control should be visible
	 * @return Boolean
	 */
	public function isVisible()
	{
		return $this->visible;
	}
	
	/**
	 * Check if the control should be collapsed
	 * @return Boolean
	 */
	public function isCollapsed()
	{
		return $this->showCollapsed;
	}
	
	/**
	 * Check if the control is filtered
	 * @return Boolean
	 */	
	public function	isFiltered()
	{
		return $this->filtered;
	}
	
	/**
	 * Get the murkup of the control's delete button
	 * @param String gfName
	 * @param Number id
	 * @param String deleteValue
	 * @return String
	 */
	protected function getDelButtonHtml($gfName, $id, $deleteValue) 
	{
		$deleteValue = runner_htmlspecialchars($deleteValue);
		$html = '<a class="delFilterCtrlButt_'.$gfName.'_'.$id.' delete-button" data-delete="'.$deleteValue.'" data-icon="remove" href="#"></a>';
		return $html;
	}
	
	/**
	 * Decrypt the database row data
 	 * @param &Array data
	 */
	protected function decryptDataRow(&$data) 
	{
		if( $this->cipherer->isFieldPHPEncrypted($this->fName) )
			$data[ $this->fName ] = $this->cipherer->DecryptField( $this->fName, $data[ $this->fName ] );	
	}
	
	/**
	 * Get the lable basing on its type
	 * @param {String} type
	 * @param {String} message
	 * @return {String}
	 */
	public function getLabel($type, $message)
	{
		if( $type === "Text" )
			return $message;
			
		return GetCustomLabel($message);	
	}

	/**
	 * The static function creating the Filter control basing on the control's type
	 * @param String fName
	 * @param Object pageObj
	 * @param Number id
	 * @param Object viewControls
	 * @return Object
	 */
	static function getFilterControl($fName, $pageObj, $id, $viewControls = null ) 
	{
		$filterFields = $pageObj->pSet->getFilterFields();
		if( array_search( $fName, $filterFields ) === false ) {
			return null;
		}
		$contorlType = $pageObj->pSet->getFilterFieldFormat($fName);
		switch($contorlType)
		{
			case FF_VALUE_LIST:
				include_once getabspath("classes/controls/FilterValuesList.php");
				if( $pageObj->pSet->multiSelectLookupEdit($fName) ) {
					include_once getabspath("classes/controls/FilterMultiselectLookup.php");
					return new FilterMultiselectLookup($fName, $pageObj, $id, $viewControls);
				}
				
				return new FilterValuesList($fName, $pageObj, $id, $viewControls);
			
			case FF_BOOLEAN:
				include_once getabspath("classes/controls/Control.php");
				include_once getabspath("classes/controls/CheckboxField.php");	
				include_once getabspath("classes/controls/FilterBoolean.php");
				return new FilterBoolean($fName, $pageObj, $id, $viewControls);
			
			case FF_INTERVAL_LIST:
				include_once getabspath("classes/controls/FilterIntervalList.php");
				return new FilterIntervalList($fName, $pageObj, $id, $viewControls);
				
			case FF_INTERVAL_SLIDER:
				include_once getabspath("classes/controls/FilterIntervalSlider.php");
				$fieldType = $pageObj->pSet->getFieldType($fName);
				
				if( IsDateFieldType($fieldType) ) 
				{
					include_once getabspath("classes/controls/FilterIntervalDateSlider.php");
					return new FilterIntervalDateSlider($fName, $pageObj, $id, $viewControls);				
				}
				if( IsTimeType($fieldType) ) 
				{
					include_once getabspath("classes/controls/FilterIntervalDateSlider.php");
					include_once getabspath("classes/controls/FilterIntervalTimeSlider.php");
					return new FilterIntervalTimeSlider($fName, $pageObj, $id, $viewControls);
				}
				return new FilterIntervalSlider($fName, $pageObj, $id, $viewControls);
				
			default:
				include_once getabspath("classes/controls/FilterValuesList.php");
				return new FilterValuesList($fName, $pageObj, $id, $viewControls);
		}	
	}

	public function hasDependentFilter() {
		return false;
	}

	protected function dataTotalsName() {
		$totalOption = $this->pSet->getFilterFieldTotal( $this->fName );
		if( $totalOption == FT_COUNT ) {
			return 'count';
		} else if( $totalOption == FT_MIN ) {
			return 'min';
		} else if( $totalOption == FT_MAX ) {
			return 'max';
		}
		return '';
	}

	/**
	 * Returns string to be displayed in the horizontal control
	 */
	protected function getShowValue() {
		if( !$this->filtered ) {
			return "";
		}
		$values =& $this->filteredFields[ $this->fName ]["values"];
		if( !$values ) {
			return "";
		}
		if( count( $values ) > 1 ) {
			return "(" . count( $values ) . ")";
		}
		return $this->getControlCaption( $values[0] );
	}
}

?>