<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'remind_header' ),
'above-grid' => array( 'message' ),
'grid' => array( 'username_email_label',
'username_email' ),
'footer' => array( 'remind_button',
'back_to_login' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'remind_header' => 'top',
'message' => 'above-grid',
'username_email_label' => 'grid',
'username_email' => 'grid',
'remind_button' => 'footer',
'back_to_login' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'username_email_label' => array( 'username_email_label' ),
'username_email' => array( 'username_email' ),
'message' => array( 'message' ),
'remind_button' => array( 'remind_button' ),
'back_to_login' => array( 'back_to_login' ),
'remind_header' => array( 'remind_header' ) ),
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
			$pageArray = array( 'id' => 'remind_Project',
'type' => 'remind',
'layoutId' => 'first',
'disabled' => 0,
'default' => 50,
'forms' => array( 'top' => array( 'modelId' => 'remind-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'remind_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'remind-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'remind-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'username_email_label' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c3' => array( 'model' => 'c3',
'items' => array( 'username_email' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'remind-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'remind_button',
'back_to_login' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'username_email_label' => array( 'type' => 'username_email_label' ),
'username_email' => array( 'type' => 'username_email' ),
'message' => array( 'type' => 'message' ),
'remind_button' => array( 'type' => 'remind_button' ),
'back_to_login' => array( 'type' => 'back_to_login' ),
'remind_header' => array( 'type' => 'remind_header' ) ),
'dbProps' => array(  ),
'version' => 11,
'businessTemplate' => 'Project',
'businessTemplatePageId' => 'remind_Forum',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>