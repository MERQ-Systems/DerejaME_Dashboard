// create namespace
Runner.namespace('Runner.resize');
/**
 * @deprecated
 */
Runner.resize.Grid = Runner.extend( Runner.emptyFn, {
	/**
	 * The page's id
	*/
	pageId: -1,
	
	/**
	* Grid settings
	* Add to new resizeable grid
	* @type {object}
	*/
	gridSettings: null,
	
	columnObjs: null,
	
	isShowRows: false,
	
	isUseInlineAdd: false,
	
	/**
	* The indicator showing if the layout 
	* of a new or old version is used 
	* @type {boolean}
	*/
	oldLayout: false,
	
	/**
	* The page's layout name
	* @type {string}
	*/	
	layoutName: "",
	
	/**
	* The layout's main class prefix
	* @type {string}
	*/
	classBasePrefix: "",
	
	constructor: function( cfg ) {
		Runner.apply(this, cfg);
		
		this.pageObj = Runner.pages.PageManager.getAt( this.tName, this.pageId );  
		this.isShowRows = Runner.pages.PageSettings.getTableData( this.tName, "showRows" );	
		this.isUseInlineAdd = Runner.pages.PageSettings.getTableData( this.tName, "isInlineAdd" );
	},
	
	/**
	 * Init method
	 * Make grid resizeable 
	 */
	init: function() {	
		if ( !this.isUseInlineAdd && !this.isShowRows ) {
			this.pageObj.fireEvent('afterPageReady', this.pageObj, this.pageObj.proxy, this.pageObj.id); // #9239
			return;
		}
		
		this.classBasePrefix = this.oldLayout ? 'runner-' : 'rnr-';
		this.cellWrapperClass = this.classBasePrefix + 'resize-cellwrapper';
		
		// set the gridSettings object's structure
		this.gridSettings = {
			classes: {
				table: this.pageObj.gridElem[0].className,
				thead: {
					trs: [], 
					ths: []
				},
				tbody: {
					trs: [], 
					bodyCells: []
				}				
			},
			styles: {
				table: this.pageObj.gridElem.attr('style') || '',
				thead: {
					trs: [], 
					ths: []
				},
				tbody: {
					trs: []
				}
			},
			ieconts: {
				ths: [],
				tds: []
			},
			rowids: [],
			recordIds: []
		};
		
		this.parseGridHeader();
		this.parseGridBodyFoot();
		
		this.pageObj.initViewControls();
		this.pageObj.fireEvent('afterPageReady', this.pageObj, this.pageObj.proxy, this.pageObj.id);		
	},
	
	/**
	 * Check if the element has a cell's colspan or rowspan
	 * @param {object} cell		The table's cell DOM element
	 * @return {boolean}
	 */
	hasColRowSpans: function( cell ) {
		return cell.colspan || cell.rowspan;
	},
	
	/**
	 * jQuery callback function fir the 'not' method
	 * Check if cell or row doesn'd belong to the grid
	 * Note: function context (this) is a DOM element
	 * not a Runner.resize.Grid instance
	 * @return {boolean}
	 */
	isNotMatch: function() {
		var table = $(this).closest('table');
		return !table.hasClass( 'runner-c-grid' ) && !table.hasClass( 'rnr-c-grid' );
	},
	
	/**
	 * Parse grid header
	 * Save old grid settings
	 * Prepare for resize
	 */
	parseGridHeader: function() {
		if ( !this.pageObj.Y ) {
			return;
		}
		
		var Y = this.pageObj.Y,
			self = this,
			initCookies = [],
			// get grid cookie string
			gridCookies = Y.Cookie.get( self.pageObj.shortTName ),
			grSettings = this.gridSettings; 
		
		this.columnObjs = [];
		
		$('thead tr.' + this.classBasePrefix + 'toprow', this.pageObj.gridElem).each( function(i) {
			var columnId = 0;
			grSettings.classes.thead.trs[i] = this.className;
			grSettings.styles.thead.trs[i] = $(this).attr('style') || '';
			
			$('th', this).not( self.isNotMatch ).each( function() {
				var $th = $(this);
				
				if ( self.hasColRowSpans(this) ) {
					return;
				}
				
				self.columnObjs[ columnId ] = {
					key: 'column' + columnId,
					label: $th.html() || '&nbsp;',
					allowHTML: true,
					sortable: false
				};
				
				if ( !gridCookies ) {
					initCookies[ initCookies.length ] = this.offsetWidth;
				}
				
				grSettings.ieconts.ths[ columnId ] = $th.attr('ieditcont') || '';
				grSettings.classes.thead.ths[ columnId ] = this.className;
				grSettings.styles.thead.ths[ columnId ] = $th.attr('style') || '';
				columnId++;
			});
		});	
		
		if ( !gridCookies ) {
			Y.Cookie.set( this.pageObj.shortTName, Y.JSON.stringify( initCookies ) );
		}
	},
	
	/**
	 * Parse grid body and footer
	 * Save old grid settings
	 * Prepare for resize
	 */
	parseGridBodyFoot: function() {
		var self = this,
			areaCodes = [],
			grSettings = this.gridSettings;
		
		$('tbody tr.' + this.classBasePrefix + 'row, tbody tr.' + this.classBasePrefix + 'bottomrow', this.pageObj.gridElem).each( function(i) {
			var areaCode = {},
				parseColumn = self.isShowRows && (self.isUseInlineAdd && i == 1 || !self.isUseInlineAdd && i == 0) || !self.isShowRows && self.isUseInlineAdd && i == 0;
				
			grSettings.rowids[i] = this.id;
			grSettings.classes.tbody.bodyCells[i] = [];
			grSettings.classes.tbody.trs[i] = this.className;
			grSettings.styles.tbody.trs[i] = {
				tr: $(this).attr('style') || '', 
				tds: []
			};	
				
			$tds = $('td', this).not( self.isNotMatch ).each( function( columnId ) {
				var $td = $(this);
			
				if ( self.hasColRowSpans(this) ) {
					return;
				}
				
				if ( $td.hasClass( self.classBasePrefix + 'edge' ) ||
					$td.hasClass( self.classBasePrefix + 'cl' ) || $td.hasClass( self.classBasePrefix + 'cr' ) || $td.parent().hasClass( self.classBasePrefix + 'bottomrow' ) ) {
					areaCode[ self.columnObjs[ columnId ].key ] = $td.html();
				} else {
					areaCode[ self.columnObjs[ columnId ].key ] = '<div class="' + self.cellWrapperClass + '">' + $td.html() + '</div>';
				}
				
				if ( parseColumn ) {
					grSettings.ieconts.tds[ columnId ] = $td.attr('ieditcont') || '';
				}
				
				grSettings.styles.tbody.trs[i].tds[ columnId ] = $td.attr('style') || '';
				grSettings.classes.tbody.bodyCells[i].push( this.className );
			});
			
			grSettings.recordIds.push( $tds.eq(0).data("record-id") );
			
			areaCodes.push( areaCode );
		});
		
		this.createResizeGrid( areaCodes );
	},
	
	/**
	* Create new resizeable grid
	* @param {object} data 
	*/
	createResizeGrid: function( data ) {
		if ( !this.pageObj.Y ) {
			return;
		}
		
		var Y = this.pageObj.Y,
			self = this,
			gridPar = self.pageObj.gridElem.parent(),
			table = new Y.DataTable.Base({
				columns: self.columnObjs,
				data: data
			}),
			$newGridElem;
			
		// remove the old table and render the new one
		gridPar.children(":not(.rnr-cells-css)").remove();
		table.render( gridPar[0] );	
		// set old grid settings
		$newGridElem = self.setOldGridSettings()
			.css({
				overflow: 'hidden', 
				'table-layout': 'fixed',
				width: this.totalGridWidth + 'px'
			});

		// redefine the handle template
		Y.Resize.prototype.HANDLE_TEMPLATE = '<div class="' + Y.ClassNameManager.getClassName('resize', 'handle') + ' ' 
			+ Y.ClassNameManager.getClassName('resize', 'handle', '{handle}') + '">' 
				+ '<div class="' + Y.ClassNameManager.getClassName('resize', 'handle', 'inner') + ' ' + Y.ClassNameManager.getClassName('resize', 'handle', 'inner', '{handle}') + '">'	
					+ '&nbsp;'
				+ '</div>'		
			+ '</div>';
			
		$('th', gridPar).not('.' + this.classBasePrefix + 'cl, .' + this.classBasePrefix + 'cr'  + ', .' + self.classBasePrefix + 'edge')
		.not( this.isNotMatch ).each( function() {			
			var $th = $(this),
				handle = Runner.isDirRTL()? 'l' : 'r',
				//ff fix
				resizeEventType = Y.UA.gecko ? 'resize:align' : 'resize:resize',
				cellWrapperStyle = 'width: ' + $th.width() + 'px; white-space: nowrap;',
				resize;
			
			$th.html('<div class="' + self.cellWrapperClass + '" style="' + cellWrapperStyle + '">' + $th.html() + '</div>'); 
			resize = new Y.Resize({
				node: this,
				handles: handle,
				defMinWidth: 0
			});			
			
			if ( Y.UA.ie ) {
				resize.delegate.dd._move = function(ev) {
					ev.pageX = window.event.screenX; 	// pageX with screenX replacing
					return Y.DD.Drag.prototype._move.call( resize.delegate.dd, ev );
				}
				resize.delegate.dd.on('drag:mouseDown', function(e) {		
					e.ev.pageX = window.event.screenX; //pageX with screenX replacing
				});
			}

			resize.on(resizeEventType, function(event) {
				this._defResizeAlignFn(event); //to prevent YUI _syncUI invocation
				event.preventDefault(); 
				
				var nodeElem = this.get('node').getDOMNode(),
					gridCookies = Y.JSON.parse(Y.Cookie.get(self.pageObj.shortTName)),
					oldCellWidth = nodeElem.offsetWidth, 
					newCellWidth = this.info.offsetWidth;
					cellIndex =	nodeElem.cellIndex,
					gridWidth = self.pageObj.gridElem[0].offsetWidth,
					$nodeElem = $( nodeElem ),
					nodeBorderAndPaddings = $nodeElem.outerWidth() - $nodeElem.width(),
					columnClass = 'yui3-datatable-col-' + $nodeElem.attr('data-yui3-col-id');			
			
				$(self.pageObj.gridElem).css('width', gridWidth + (newCellWidth - oldCellWidth) + 'px');
				
				$('.' + columnClass, gridPar).css('width', this.info.offsetWidth + 'px');
				$('.' + columnClass + ' div.' + self.cellWrapperClass, gridPar).css('width', this.info.offsetWidth + 'px');					
				$('div.' + self.cellWrapperClass, nodeElem).css('width', (this.info.offsetWidth - nodeBorderAndPaddings) + 'px');											
			});
			
			if ( Runner.isDirRTL() ) {
				resize.on('drag:start', function() { //change the Shim position
					Y.DD.DDM._pg.setStyles({
						left: 'auto',
						right: '0'
					});
				});
			}
			
			resize.on('resize:end', function(event) {	
				event.preventDefault(); //to prevent YUI _syncUI invocation
			});						
					
			if (Y.UA.gecko || Y.UA.ie) { // fix ie && firefox
				var node = $('<div style="position:relative"></div>');
				$th.children().appendTo( node );
				node.appendTo( $th );
			} else {
				$th.css('position', 'relative');
			}						
		});
		
		if ( Runner.isDirRTL() ) {  //change the Shim position
			Y.DD.DDM._pg.setStyles({
				left: 'auto',
				right: '0'
			});
		}
	},
	
	/**
	* Set to new resizable grid old saved grid settings
	 * @return {jQuery object} a new grid element 
	*/
	setOldGridSettings: function() {
		var self = this,
			// get new resizeable grid element
			$newGridElem = $('.' + this.classBasePrefix + 's-grid table.yui3-datatable-table', this.pageObj.pageCont),
			grSettings = this.gridSettings,
			gridCookies;
		
		// add class for table style
		$newGridElem.parent().addClass( this.classBasePrefix + 's-grid' ).addClass('not-container').addClass( this.layoutName );
		//to apply the old table's margin-bottom rule
		$newGridElem.parent().parent().addClass( this.classBasePrefix + 'c-grid' ); 
		
		// add class for table
		$newGridElem.addClass( grSettings.classes.table );
				
		// add style for table
		if ( grSettings.styles.table ) {
			$newGridElem.attr('style', grSettings.styles.table);
		}
		
		// get cookie for grid header cells
		gridCookies = this.pageObj.Y.JSON.parse( this.pageObj.Y.Cookie.get( this.pageObj.shortTName ) );

		this.totalGridWidth = 0;		
		// add classes, styles and ieditcont atribute to thead row and cells
		$('thead tr', $newGridElem).not( this.isNotMatch ).each( function(i) {
			var $tr = $(this);
			
			$tr.addClass( grSettings.classes.thead.trs[i] ); 
			if ( grSettings.styles.thead.trs[i] ) {
				$tr.attr( 'style', grSettings.styles.thead.trs[i] );
			}
			$('th', $tr).not( self.isNotMatch ).each( function(j) {
				var $th = $(this);
				
				$th.addClass( grSettings.classes.thead.ths[j] ); 
				if ( grSettings.styles.thead.ths[j] ) {
					$th.attr( 'style', grSettings.styles.thead.ths[j] );
				}
				//set cell width
				if ( !$th.hasClass( self.classBasePrefix + 'edge' ) &&
					!$th.hasClass( self.classBasePrefix + 'cl' ) && !$th.hasClass( self.classBasePrefix + 'cr' ) && gridCookies[j] !== 0 ) {
					$th.css('width', gridCookies[j] + 'px');
				} else {
					$th.css('width', $th.width() + 'px');
				}
				self.totalGridWidth += $th.width();
				
				if ( grSettings.ieconts[j] ) {
					$th.attr('ieditcont') = grSettings.ieconts.ths[j];
				}
			});
		});
				
		// add classes, styles, ids and ieditcont atribute to tbody row and cells
		$('tbody.yui3-datatable-data tr', $newGridElem).not( this.isNotMatch ).each( function(i) {			
			var $tr = $(this),
				isRowTFoot,
				recordId = grSettings.recordIds[i];
				
			$tr.addClass( grSettings.classes.tbody.trs[i] );				
			isRowTFoot = $tr.hasClass('footer'); 
			
			this.id = grSettings.rowids[i];
			
			if ( !isRowTFoot && grSettings.styles.tbody.trs[i].tr ) {
				$tr.attr('style', grSettings.styles.tbody.trs[i].tr);
			}
			
			$('td', this).not( self.isNotMatch ).each( function(j) {
				var $td = $(this);
				
				$td.addClass( grSettings.classes.tbody.bodyCells[i][j] );
				
				if ( recordId !== undefined ) {
					$td.attr("data-record-id", recordId);
				}
				
				if ( !isRowTFoot ) {
					if ( grSettings.styles.tbody.trs[i].tds[j] ) {
						$td.attr( 'style', grSettings.styles.tbody.trs[i].tds[j] );
					}
					if ( grSettings.ieconts[j] ) {
						$td.attr('ieditcont') = grSettings.ieconts.tds[j];
					}
				}
			});
		});
			
		return $newGridElem;
	}
});