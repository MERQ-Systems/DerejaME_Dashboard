<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'topic2',
'startedby',
'categoryid',
'question',
'created',
'startedby2' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'topic2' => array( 'simple_grid_field' ),
'startedby' => array( 'simple_grid_field1' ),
'categoryid' => array( 'simple_grid_field3' ),
'question' => array( 'simple_grid_field8' ),
'created' => array( 'simple_grid_field9' ),
'startedby2' => array( 'simple_grid_field10' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array(  ),
'above-grid' => array(  ),
'grid' => array( 'simple_grid_field',
'simple_grid_field9',
'simple_grid_field3',
'simple_grid_field1',
'simple_grid_field10',
'simple_grid_field8',
'snippet',
'snippet1' ),
'below-grid' => array(  ) ),
'formXtTags' => array( 'top' => array(  ),
'above-grid' => array(  ),
'below-grid' => array(  ) ),
'itemForms' => array( 'simple_grid_field' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field8' => 'grid',
'snippet' => 'grid',
'snippet1' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field11' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field33' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field33' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field33' ),
'snippet' => array( 'location' => 'grid',
'cellId' => 'cell_field36' ),
'snippet1' => array( 'location' => 'grid',
'cellId' => 'cell_field36' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'grid_field' => array( 'simple_grid_field',
'simple_grid_field1',
'simple_grid_field3',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field10' ),
'snippet' => array( 'snippet',
'snippet1' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0,
1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'topic2_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'created_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field11' => array( 'cols' => array( 0,
1 ),
'rows' => array( 2 ),
'tags' => array( 'categoryid_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field33' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array( 'startedby_fieldcolumn',
'startedby2_fieldcolumn',
'question_fieldcolumn' ),
'items' => array( 'simple_grid_field1',
'simple_grid_field10',
'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field36' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'snippet',
'snippet1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0,
1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 5 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'masterlist',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'masterlist',
'type' => 'masterlist',
'layoutId' => 'masterlist',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'masterlist-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field',
'colspan' => 2 ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field',
'colspan' => 1 ),
array( 'cell' => 'cell_field1',
'colspan' => 1 ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field11',
'colspan' => 2 ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field33' ),
array( 'cell' => 'cell_field36' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field',
'colspan' => 2 ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array(  ),
'border' => array( array( 'side' => 'top' ),
array( 'side' => 'left' ),
array( 'side' => 'bottom',
'width' => '1px',
'color' => '#ffffff' ) ) ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'border' => array( array( 'side' => 'bottom',
'width' => '1px',
'color' => '#ffffff' ),
array( 'side' => 'right',
'width' => '1px',
'color' => '#ffffff' ),
array( 'side' => '' ),
array( 'side' => 'top',
'width' => '1px',
'color' => '#ffffff' ) ),
'field' => 'topic2',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'align' => 'right',
'border' => array( array( 'side' => 'bottom',
'width' => '1px',
'color' => '#ffffff' ),
array( 'side' => 'top',
'width' => '1px',
'color' => '#ffffff' ) ),
'field' => 'created',
'columnName' => 'field' ),
'cell_field11' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'categoryid',
'columnName' => 'field' ),
'cell_field33' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1',
'simple_grid_field10',
'simple_grid_field8' ),
'border' => array( array( 'side' => 'bottom',
'width' => '1px',
'color' => '#ffffff' ) ),
'customCSS' => '/* Put  your custom CSS code here */

:host {

}
',
'field' => 'startedby',
'columnName' => 'field' ),
'cell_field36' => array( 'model' => 'cell_field',
'items' => array( 'snippet',
'snippet1' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'simple_grid_field' => array( 'field' => 'topic2',
'type' => 'grid_field',
'font-size' => '30px' ),
'simple_grid_field1' => array( 'field' => 'startedby',
'type' => 'grid_field' ),
'simple_grid_field3' => array( 'field' => 'categoryid',
'type' => 'grid_field' ),
'simple_grid_field8' => array( 'field' => 'question',
'type' => 'grid_field',
'font-size' => '16px',
'customCSS' => '/* Put  your custom CSS code here */

:host {
text-align: left;
}
' ),
'simple_grid_field9' => array( 'field' => 'created',
'type' => 'grid_field' ),
'simple_grid_field10' => array( 'field' => 'startedby2',
'type' => 'grid_field',
'bold' => true,
'customCSS' => '/* Put  your custom CSS code here */

:host {
    text-align: left;
}
' ),
'snippet' => array( 'eventId' => 'Subscribe',
'label' => array( 'text' => 'Subscribe',
'type' => 0 ),
'type' => 'snippet' ),
'snippet1' => array( 'eventId' => 'topic_subscribe',
'label' => array( 'text' => 'topic subscribe',
'type' => 0 ),
'type' => 'snippet' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>