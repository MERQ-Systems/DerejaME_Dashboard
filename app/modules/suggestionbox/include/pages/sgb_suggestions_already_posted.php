<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
'spreadsheetMode' => false,
'addToBottom' => false,
'delete' => false,
'updateSelected' => false,
'addInPopup' => null,
'editInPopup' => null,
'clickSort' => false,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'allDetails' => array( 'linkType' => 2 ),
'details' => array( 'sgb_comments' => array( 'displayPreview' => 2,
'previewPageId' => '',
'showCount' => false,
'badgeColor' => '',
'hideEmptyChild' => false,
'hideEmptyPreview' => null,
'showProceedLink' => null,
'printDetails' => false ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => false,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'id' => array( 'totalsType' => '' ),
'suggested_by' => array( 'totalsType' => '' ),
'status' => array( 'totalsType' => '' ),
'created_date' => array( 'totalsType' => '' ),
'upvoted_date' => array( 'totalsType' => '' ),
'suggestion' => array( 'totalsType' => '' ),
'vote' => array( 'totalsType' => '' ),
'categoryid' => array( 'totalsType' => '' ),
'title' => array( 'totalsType' => '' ),
'comments' => array( 'totalsType' => '' ),
'images' => array( 'totalsType' => '' ),
'name' => array( 'totalsType' => '' ),
'email' => array( 'totalsType' => '' ),
'pinned' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'title' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'title' => array( 'simple_grid_field8' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'below-grid' => array(  ),
'supertop' => array( 'loginform_login',
'username_button' ),
'left' => array(  ),
'top' => array(  ),
'grid' => array( 'simple_grid_field8',
'grid_view' ) ),
'formXtTags' => array( 'above-grid' => array(  ),
'below-grid' => array(  ),
'supertop' => array( 'guestloginbutton',
'loggedas_message' ),
'left' => array(  ),
'top' => array(  ) ),
'itemForms' => array( 'loginform_login' => 'supertop',
'username_button' => 'supertop',
'simple_grid_field8' => 'grid',
'grid_view' => 'grid' ),
'itemLocations' => array( 'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ) ),
'itemVisiblity' => array( 'username_button' => 3,
'loginform_login' => 3 ) ),
'itemsByType' => array( 'grid_field' => array( 'simple_grid_field8' ),
'username_button' => array( 'username_button' ),
'changepassword_link' => array( 'changepassword_link' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'grid_view' => array( 'grid_view' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'view_column' ),
'items' => array( 'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'title_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'list',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'already_posted',
'type' => 'list',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'list-vbar',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_field8' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_field8' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_field8' ) ) ) ),
'cells' => array( 'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array(  ) ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'title',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_view' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'simple_grid_field8' => array( 'field' => 'title',
'type' => 'grid_field',
'clickSort' => false,
'inlineAdd' => false,
'inlineEdit' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ) ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'grid_view' => array( 'type' => 'grid_view' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 11,
'addToBottom' => false,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>