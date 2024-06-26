<?php
			$optionsArray = array( 'master' => array( 'hd_tickets' => array( 'preview' => false ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'categoryid',
'body',
'attachment',
'subject',
'from_email',
'to_email' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'categoryid' => array( 'integrated_edit_field17' ),
'body' => array( 'integrated_edit_field1' ),
'attachment' => array( 'integrated_edit_field' ),
'subject' => array( 'integrated_edit_field3' ),
'from_email' => array( 'from_email' ),
'to_email' => array( 'to_email' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'add_message' ),
'below-grid' => array( 'add_save',
'add_reset',
'custom_button',
'add_cancel' ),
'supertop' => array( 'logo',
'menu',
'loginform_login',
'username_button' ),
'top' => array( 'add_header' ),
'grid' => array( 'integrated_edit_field17',
'integrated_edit_field1',
'integrated_edit_field',
'integrated_edit_field3',
'from_email',
'to_email' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'add_message' => 'above-grid',
'add_save' => 'below-grid',
'add_reset' => 'below-grid',
'custom_button' => 'below-grid',
'add_cancel' => 'below-grid',
'logo' => 'supertop',
'menu' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'add_header' => 'top',
'integrated_edit_field17' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field3' => 'grid',
'from_email' => 'grid',
'to_email' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field17' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'from_email' => array( 'location' => 'grid',
'cellId' => 'c1' ),
'to_email' => array( 'location' => 'grid',
'cellId' => 'c' ) ),
'itemVisiblity' => array( 'menu' => 3,
'username_button' => 3,
'loginform_login' => 3 ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'add_reset' => array( 'add_reset' ),
'add_cancel' => array( 'add_cancel' ),
'integrated_edit_field' => array( 'integrated_edit_field17',
'integrated_edit_field',
'integrated_edit_field3',
'from_email',
'to_email' ),
'edit_field' => array( 'integrated_edit_field1' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'custom_button' => array( 'custom_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'from_email' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'to_email' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field17' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 6 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => true,
'customButtons' => array( 'Back_to_Tickets_List' ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'add',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'Back_to_Tickets_List' ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'add_reset',
'custom_button',
'add_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'topbar-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'menu' ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c1' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ),
array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 1 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6',
'colspan' => 1 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4',
'colspan' => 1 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c5',
'colspan' => 1,
'rowspan' => 1 ) ) ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field17' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ) ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ) ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ) ),
'c1' => array( 'model' => 'c2',
'items' => array( 'from_email' ) ),
'c' => array( 'model' => 'c2',
'items' => array( 'to_email' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header',
'title' => array( 'page' => 'add',
'table' => 'hd_messages',
'type' => 7 ) ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save',
'label' => array( 'type' => 0,
'text' => 'Send' ) ),
'add_reset' => array( 'type' => 'add_reset' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'integrated_edit_field17' => array( 'field' => 'categoryid',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field1' => array( 'field' => 'body',
'type' => 'edit_field',
'orientation' => 0,
'joined' => false,
'separated' => true ),
'integrated_edit_field' => array( 'field' => 'attachment',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'attachment',
'table' => 'hd_messages',
'type' => 3 ) ),
'integrated_edit_field3' => array( 'field' => 'subject',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'from_email' => array( 'field' => 'from_email',
'type' => 'integrated_edit_field',
'orientation' => 1,
'joined' => true,
'separated' => false ),
'to_email' => array( 'field' => 'to_email',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'custom_button' => array( 'eventId' => 'Back_to_Tickets_List',
'label' => array( 'text' => 'Back to List',
'type' => 0 ),
'type' => 'custom_button' ) ),
'dbProps' => array(  ),
'version' => 11,
'pageAlign' => 'center',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>