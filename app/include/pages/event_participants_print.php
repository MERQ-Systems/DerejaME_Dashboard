<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'master' => array( 'candidates' => array( 'preview' => false ),
'events' => array( 'preview' => false ) ),
'totals' => array( 'EventID' => array( 'totalsType' => '' ),
'CandidateID' => array( 'totalsType' => '' ),
'Event_Start_Date' => array( 'totalsType' => '' ),
'Event_End_Date' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'EventID',
'CandidateID',
'Event_Start_Date',
'Event_End_Date' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'EventID' => array( 'simple_grid_field',
'simple_grid_field4' ),
'CandidateID' => array( 'simple_grid_field1',
'simple_grid_field5' ),
'Event_Start_Date' => array( 'simple_grid_field2',
'simple_grid_field6' ),
'Event_End_Date' => array( 'simple_grid_field3',
'simple_grid_field7' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader' ),
'above-grid' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ),
'below-grid' => array(  ),
'grid' => array( 'simple_grid_field4',
'simple_grid_field',
'simple_grid_field5',
'simple_grid_field1',
'simple_grid_field6',
'simple_grid_field2',
'simple_grid_field7',
'simple_grid_field3' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages',
'inline_cancel',
'inlineadd_link' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'print_pages' => 'above-grid',
'grid_inline_cancel' => 'above-grid',
'inline_add' => 'above-grid',
'simple_grid_field4' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field3' => 'grid' ),
'itemLocations' => array( 'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'grid_field' => array( 'simple_grid_field',
'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field3' ),
'grid_field_label' => array( 'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field7' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'EventID_fieldheadercolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'CandidateID_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'Event_Start_Date_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'Event_End_Date_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'EventID_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'CandidateID_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'Event_Start_Date_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'Event_End_Date_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 4,
'height' => 3 ) ) ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'EventID',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'EventID',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'CandidateID',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'CandidateID',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'Event_Start_Date',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'Event_Start_Date',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'Event_End_Date',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'Event_End_Date',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'simple_grid_field' => array( 'field' => 'EventID',
'type' => 'grid_field' ),
'simple_grid_field4' => array( 'type' => 'grid_field_label',
'field' => 'EventID' ),
'simple_grid_field1' => array( 'field' => 'CandidateID',
'type' => 'grid_field' ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'CandidateID' ),
'simple_grid_field2' => array( 'field' => 'Event_Start_Date',
'type' => 'grid_field' ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'Event_Start_Date' ),
'simple_grid_field3' => array( 'field' => 'Event_End_Date',
'type' => 'grid_field' ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'Event_End_Date' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>