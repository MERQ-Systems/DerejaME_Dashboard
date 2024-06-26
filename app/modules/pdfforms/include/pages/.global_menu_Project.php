<?php
			$optionsArray = array( 'welcome' => array( 'welcomePageSkip' => true,
'welcomeItems' => array( 'logo' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'list_options' => array( 'menutItem' => false ),
'loginform_login' => array( 'menutItem' => false ),
'username_button' => array( 'menutItem' => false ),
'welcome_item1' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'pdf_forms',
'page' => 'list' ),
'welcome_item' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'pdf_formoptions',
'page' => 'edit' ),
'welcome_item2' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'pdf_test',
'page' => 'list' ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu',
'list_options',
'loginform_login',
'username_button' ),
'above-grid' => array(  ),
'grid' => array( 'welcome_item1',
'welcome_item',
'welcome_item2' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'welcome_item1' => 'grid',
'welcome_item' => 'grid',
'welcome_item2' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'list_options' => 3,
'username_button' => 3,
'loginform_login' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'welcome_item' => array( 'welcome_item1',
'welcome_item2',
'welcome_item' ),
'list_options' => array( 'list_options' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
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
			$pageArray = array( 'id' => 'menu_Project',
'type' => 'menu',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 11,
'forms' => array( 'supertop' => array( 'modelId' => 'menu-topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'list_options',
'loginform_login',
'username_button' ),
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
'grid' => array( 'modelId' => 'welcome',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'welcome_item1',
'welcome_item',
'welcome_item2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'welcome_item1' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'pdf_forms',
'linkPage' => 'list',
'linkText' => array( 'table' => 'pdf_forms',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'tree-conifer' ),
'linkComments' => array( 'text' => 'Forms description',
'type' => 0 ),
'background' => '#E8926F',
'linkType' => 0 ),
'welcome_item2' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'pdf_test',
'linkPage' => 'list',
'linkText' => array( 'table' => 'pdf_test',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'shopping-cart' ),
'linkComments' => array( 'text' => 'Test description',
'type' => 0 ),
'background' => '#DB7093',
'linkType' => 0 ),
'welcome_item' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'pdf_formoptions',
'linkPage' => 'edit',
'linkText' => array( 'table' => 'pdf_formoptions',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'barcode' ),
'linkComments' => array( 'text' => 'Formoptions description',
'type' => 0 ),
'background' => '#778899',
'linkType' => 0 ),
'list_options' => array( 'type' => 'list_options',
'items' => array(  ) ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ) ),
'dbProps' => array(  ),
'version' => 11,
'businessTemplate' => 'Project',
'businessTemplatePageId' => 'menu_PDFForms1',
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>