<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'register_success_header' ),
'grid' => array( 'register_proceed',
'register_close' ),
'footer' => array(  ),
'above-grid' => array(  ) ),
'formXtTags' => array( 'footer' => array(  ),
'above-grid' => array(  ) ),
'itemForms' => array( 'register_success_header' => 'top',
'register_proceed' => 'grid',
'register_close' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'register_proceed' => array( 'register_proceed' ),
'register_success_header' => array( 'register_success_header' ),
'register_close' => array( 'register_close' ) ),
'cellMaps' => array(  ) ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'register_success_Project',
'type' => 'register_success',
'layoutId' => 'first',
'disabled' => 0,
'default' => 22,
'forms' => array( 'top' => array( 'modelId' => 'register_success-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'register_success_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'register_success-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'register_proceed',
'register_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'register_success-footer',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'register_success-above',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'register_proceed' => array( 'type' => 'register_proceed' ),
'register_success_header' => array( 'type' => 'register_success_header' ),
'register_close' => array( 'type' => 'register_close' ) ),
'dbProps' => array(  ),
'version' => 11,
'businessTemplate' => 'Project',
'businessTemplatePageId' => 'register_success_ToDoList1',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>