<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'fullname',
'email',
'username',
'password' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'fullname' => array( 'integrated_edit_field' ),
'email' => array( 'integrated_edit_field1' ),
'username' => array( 'integrated_edit_field2' ),
'password' => array( 'integrated_edit_field3' ),
'confirm_aoel3cx' => array( 'integrated_confirm_password' ) ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'register_header',
'register_message' ),
'top' => array( 'text' ),
'footer' => array( 'register_save',
'back_to_login',
'register_reset',
'text1' ),
'grid' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_confirm_password' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'register_header' => 'above-grid',
'register_message' => 'above-grid',
'text' => 'top',
'register_save' => 'footer',
'back_to_login' => 'footer',
'register_reset' => 'footer',
'text1' => 'footer',
'integrated_edit_field' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_confirm_password' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_confirm_password' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'register_header' => array( 'register_header' ),
'register_reset' => array( 'register_reset' ),
'register_message' => array( 'register_message' ),
'register_save' => array( 'register_save' ),
'back_to_login' => array( 'back_to_login' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3' ),
'integrated_confirm_password' => array( 'integrated_confirm_password' ),
'text' => array( 'text',
'text1' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_confirm_password' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'register' => array( 'gridFields' => array( 'fullname',
'email',
'username',
'password' ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'register',
'type' => 'register',
'layoutId' => 'pretty1',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'register-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'register_header' ),
'align' => 'center' ),
'c2' => array( 'model' => 'c2',
'items' => array( 'register_message' ),
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'register-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'text' ),
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'register-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c3' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'register_save',
'back_to_login' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'register_reset' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'text1' ) ),
'c3' => array( 'model' => 'c2',
'items' => array(  ) ),
'c4' => array( 'model' => 'c1',
'items' => array(  ) ),
'c5' => array( 'model' => 'c2',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_confirm_password' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'register_header' => array( 'type' => 'register_header' ),
'register_reset' => array( 'type' => 'register_reset' ),
'register_message' => array( 'type' => 'register_message' ),
'register_save' => array( 'type' => 'register_save' ),
'back_to_login' => array( 'type' => 'back_to_login' ),
'integrated_edit_field' => array( 'field' => 'fullname',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'fullname',
'table' => 'derejame_users',
'type' => 3 ),
'bold' => true ),
'integrated_edit_field1' => array( 'field' => 'email',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'username',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'password',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_confirm_password' => array( 'type' => 'integrated_confirm_password',
'field' => 'confirm_aoel3cx',
'orientation' => 0 ),
'text' => array( 'type' => 'text',
'label' => array( 'type' => 0,
'text' => 'Welcome To Dereja Monitoring and Evaluation System' ),
'editedByRte' => false,
'bold' => true,
'font-size' => '30px',
'color' => '#ff0007' ),
'text1' => array( 'type' => 'text',
'label' => array( 'text' => 'This Application is for Internal Use only!
It can only be accessed by an authorized personel!',
'type' => 0 ),
'editedByRte' => false,
'color' => '#a7a7a7' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image',
'shadow' => true,
'fullSize' => false,
'image' => array( 'image' => 'dereja.png',
'source' => 2 ) ),
'imageBgColor' => '#ffffff',
'controlsBgColor' => 'white',
'imagePosition' => 'left' );
		?>