<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu',
'simple_search',
'loginform_login',
'alert_notify',
'username_button',
'user_name',
'list_options',
'skins' ),
'top' => array( 'breadcrumb',
'snippet',
'expand_button' ),
'grid' => array( 'forumtopics_view_list',
'Dashboard_snippet',
'forumreplies_chart_chart',
'forumsubscribers_dash_list' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'simple_search' => 'supertop',
'loginform_login' => 'supertop',
'alert_notify' => 'supertop',
'username_button' => 'supertop',
'user_name' => 'supertop',
'list_options' => 'supertop',
'skins' => 'supertop',
'breadcrumb' => 'top',
'snippet' => 'top',
'expand_button' => 'top',
'forumtopics_view_list' => 'grid',
'Dashboard_snippet' => 'grid',
'forumreplies_chart_chart' => 'grid',
'forumsubscribers_dash_list' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'simple_search' => 3,
'loginform_login' => 3,
'username_button' => 3,
'list_options' => 3,
'snippet' => 3,
'expand_button' => 5,
'user_name' => 3 ) ),
'itemsByType' => array( 'breadcrumb' => array( 'breadcrumb' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'advsearch_link' => array( 'advsearch_link' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'loginform_login' => array( 'loginform_login' ),
'username_button' => array( 'username_button' ),
'list_options' => array( 'list_options' ),
'snippet' => array( 'snippet',
'skins',
'user_name',
'alert_notify' ),
'expand_button' => array( 'expand_button' ),
'dashboard-item' => array( 'forumtopics_view_list',
'Dashboard_snippet',
'forumsubscribers_dash_list',
'forumreplies_chart_chart' ) ),
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
'misc' => array( 'type' => 'dashboard',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dashboard' => array( 'elements' => array( array( 'item' => array( 'type' => 'dashboard-item',
'table' => 'forumtopics_view',
'dashType' => 0,
'reloadInterval' => 0,
'pageId' => '',
'detailsFilterByMaster' => false,
'detailsMasterTable' => '',
'dashName' => 'forumtopics_view_list',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'fa' => 'fire' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true,
'addRecord' => false,
'editRecord' => false,
'viewRecord' => false,
'inlineAdd' => false,
'inlineEdit' => false,
'copyRecord' => false,
'deleteRecords' => false,
'updateSelected' => false ),
'elementName' => 'forumtopics_view_list',
'table' => 'forumtopics_view',
'pageName' => '',
'type' => 0,
'reload' => 0,
'tabsPageTypes' => array(  ),
'pageNames' => array(  ),
'initialTabPageType' => 'view',
'inlineAdd' => false,
'inlineEdit' => false,
'deleteRecord' => false,
'copy' => false,
'popupAdd' => false,
'popupEdit' => false,
'popupView' => false,
'updateSelected' => false,
'notUsedDetailTables' => array(  ),
'details' => array(  ),
'zoom' => 'undefined',
'updateMoved' => true,
'masterTable' => '',
'tabLocation' => 'above',
'panelStyle' => 'primary' ),
array( 'item' => array( 'type' => 'dashboard-item',
'table' => 'Dashboard',
'dashType' => 7,
'reloadInterval' => 0,
'pageId' => '',
'detailsFilterByMaster' => false,
'detailsMasterTable' => '',
'dashName' => 'Dashboard_snippet',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'glyph' => 'shopping-cart' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true,
'eventId' => 'Dashboard_snippet' ),
'elementName' => 'Dashboard_snippet',
'table' => 'Dashboard',
'pageName' => '',
'type' => 7,
'reload' => 0,
'tabsPageTypes' => array(  ),
'pageNames' => array(  ),
'initialTabPageType' => 'view',
'notUsedDetailTables' => array(  ),
'details' => array(  ),
'zoom' => 'undefined',
'updateMoved' => true,
'snippetId' => 'Dashboard_snippet',
'masterTable' => '',
'tabLocation' => 'above',
'panelStyle' => 'primary' ),
array( 'item' => array( 'type' => 'dashboard-item',
'table' => 'forumreplies_chart',
'dashType' => 1,
'reloadInterval' => 0,
'pageId' => '',
'detailsFilterByMaster' => false,
'detailsMasterTable' => '',
'dashName' => 'forumreplies_chart_chart',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'glyph' => 'calendar' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true ),
'elementName' => 'forumreplies_chart_chart',
'table' => 'forumreplies_chart',
'pageName' => '',
'type' => 1,
'reload' => 0,
'tabsPageTypes' => array(  ),
'pageNames' => array(  ),
'initialTabPageType' => 'view',
'notUsedDetailTables' => array(  ),
'details' => array(  ),
'zoom' => 'undefined',
'updateMoved' => true,
'masterTable' => '',
'tabLocation' => 'above',
'panelStyle' => 'primary' ),
array( 'item' => array( 'type' => 'dashboard-item',
'table' => 'forumsubscribers_dash',
'dashType' => 0,
'reloadInterval' => 0,
'pageId' => '',
'detailsFilterByMaster' => false,
'detailsMasterTable' => '',
'dashName' => 'forumsubscribers_dash_list',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'fa' => 'camera' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true,
'addRecord' => false,
'editRecord' => false,
'viewRecord' => false,
'inlineAdd' => false,
'inlineEdit' => false,
'copyRecord' => false,
'deleteRecords' => false,
'updateSelected' => false ),
'elementName' => 'forumsubscribers_dash_list',
'table' => 'forumsubscribers_dash',
'pageName' => '',
'type' => 0,
'reload' => 0,
'tabsPageTypes' => array(  ),
'pageNames' => array(  ),
'initialTabPageType' => 'view',
'inlineAdd' => false,
'inlineEdit' => false,
'deleteRecord' => false,
'copy' => false,
'popupAdd' => false,
'popupEdit' => false,
'popupView' => false,
'updateSelected' => false,
'notUsedDetailTables' => array(  ),
'details' => array(  ),
'zoom' => 'undefined',
'updateMoved' => true,
'masterTable' => '',
'tabLocation' => 'above',
'panelStyle' => 'primary' ) ) ),
'dashSearch' => array( 'searchFields' => array( 'forumtopics_view_topic' => array( array( 'field' => 'topic',
'table' => 'forumtopics_view' ) ),
'forumtopics_view_startedby' => array( array( 'field' => 'startedby',
'table' => 'forumtopics_view' ) ),
'forumtopics_view_startedby2' => array( array( 'field' => 'startedby2',
'table' => 'forumtopics_view' ) ),
'forumtopics_view_id' => array( array( 'field' => 'id',
'table' => 'forumtopics_view' ) ),
'forumtopics_view_categoryid' => array( array( 'field' => 'categoryid',
'table' => 'forumtopics_view' ) ),
'forumtopics_view_views' => array( array( 'field' => 'views',
'table' => 'forumtopics_view' ) ),
'forumtopics_view_activity' => array( array( 'field' => 'activity',
'table' => 'forumtopics_view' ) ),
'forumtopics_view_pinned' => array( array( 'field' => 'pinned',
'table' => 'forumtopics_view' ) ),
'forumtopics_view_color' => array( array( 'field' => 'color',
'table' => 'forumtopics_view' ) ),
'forumtopics_view_created' => array( array( 'field' => 'created',
'table' => 'forumtopics_view' ) ),
'forumsubscribers_dash_id' => array( array( 'field' => 'id',
'table' => 'forumsubscribers_dash' ) ),
'forumsubscribers_dash_userid' => array( array( 'field' => 'userid',
'table' => 'forumsubscribers_dash' ) ),
'forumsubscribers_dash_topicid' => array( array( 'field' => 'topicid',
'table' => 'forumsubscribers_dash' ) ),
'forumsubscribers_dash_topic' => array( array( 'field' => 'topic',
'table' => 'forumsubscribers_dash' ) ),
'forumsubscribers_dash_name' => array( array( 'field' => 'name',
'table' => 'forumsubscribers_dash' ) ) ),
'allSearchFields' => array( 'forumtopics_view_topic',
'forumtopics_view_startedby',
'forumtopics_view_startedby2',
'forumtopics_view_id',
'forumtopics_view_categoryid',
'forumtopics_view_views',
'forumtopics_view_activity',
'forumtopics_view_pinned',
'forumtopics_view_color',
'forumtopics_view_created',
'forumsubscribers_dash_id',
'forumsubscribers_dash_userid',
'forumsubscribers_dash_topicid',
'forumsubscribers_dash_topic',
'forumsubscribers_dash_name' ),
'googleLikeFields' => array( 'forumtopics_view_topic',
'forumtopics_view_startedby',
'forumtopics_view_startedby2',
'forumtopics_view_id',
'forumtopics_view_categoryid',
'forumtopics_view_views',
'forumtopics_view_activity',
'forumtopics_view_pinned',
'forumtopics_view_color',
'forumtopics_view_created',
'forumsubscribers_dash_id',
'forumsubscribers_dash_userid',
'forumsubscribers_dash_topicid',
'forumsubscribers_dash_topic',
'forumsubscribers_dash_name' ) ) );
			$pageArray = array( 'id' => 'dashboard',
'type' => 'dashboard',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'topbar-dashboard',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu',
'simple_search' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'alert_notify',
'username_button',
'user_name',
'list_options',
'skins' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'dashboard-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c4' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c4' => array( 'model' => 'c4',
'items' => array( 'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'align' => 'left',
'customCSS' => '.r-grid{
    border: none !important;
    background: none !important;
}    ' ),
'c' => array( 'model' => 'c4',
'items' => array( 'snippet',
'expand_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'dashboard-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'cell_0_0',
'colspan' => 1,
'rowspan' => 1 ),
array( 'cell' => 'cell_0_1',
'colspan' => 1,
'rowspan' => 1 ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_1_0',
'colspan' => 1,
'rowspan' => 1 ),
array( 'cell' => 'cell_1_1',
'colspan' => 1,
'rowspan' => 1 ) ) ) ),
'cells' => array( 'cell_0_0' => array( 'model' => 'c1',
'items' => array( 'forumtopics_view_list' ) ),
'cell_0_1' => array( 'model' => 'c1',
'items' => array( 'Dashboard_snippet' ) ),
'cell_1_0' => array( 'model' => 'c1',
'items' => array( 'forumreplies_chart_chart' ) ),
'cell_1_1' => array( 'model' => 'c1',
'items' => array( 'forumsubscribers_dash_list' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'breadcrumb' => array( 'type' => 'breadcrumb' ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'changepassword_link' ),
'buttonStyle' => 'link',
'icon' => array( 'glyph' => '' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'advsearch_link' ),
'icon' => array( 'glyph' => 'cog' ),
'buttonStyle' => 'link' ),
'snippet' => array( 'type' => 'snippet',
'eventId' => 'results_message',
'label' => array( 'text' => 'results_message',
'type' => 0 ),
'mobileControl' => 'button' ),
'expand_button' => array( 'type' => 'expand_button' ),
'skins' => array( 'type' => 'snippet',
'eventId' => 'skins',
'label' => array( 'text' => 'skins',
'type' => 0 ) ),
'user_name' => array( 'type' => 'snippet',
'eventId' => 'User_Name',
'label' => array( 'text' => 'User Name',
'type' => 0 ),
'mobileControl' => 'button' ),
'alert_notify' => array( 'type' => 'snippet',
'eventId' => 'alert_notify',
'label' => array( 'text' => 'alert notify',
'type' => 0 ) ),
'forumtopics_view_list' => array( 'type' => 'dashboard-item',
'table' => 'forumtopics_view',
'dashType' => 0,
'reloadInterval' => 0,
'pageId' => '',
'detailsFilterByMaster' => false,
'detailsMasterTable' => '',
'dashName' => 'forumtopics_view_list',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'fa' => 'fire' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true,
'addRecord' => false,
'editRecord' => false,
'viewRecord' => false,
'inlineAdd' => false,
'inlineEdit' => false,
'copyRecord' => false,
'deleteRecords' => false,
'updateSelected' => false ),
'Dashboard_snippet' => array( 'type' => 'dashboard-item',
'table' => 'Dashboard',
'dashType' => 7,
'reloadInterval' => 0,
'pageId' => '',
'detailsFilterByMaster' => false,
'detailsMasterTable' => '',
'dashName' => 'Dashboard_snippet',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'glyph' => 'shopping-cart' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true,
'eventId' => 'Dashboard_snippet' ),
'forumsubscribers_dash_list' => array( 'type' => 'dashboard-item',
'table' => 'forumsubscribers_dash',
'dashType' => 0,
'reloadInterval' => 0,
'pageId' => '',
'detailsFilterByMaster' => false,
'detailsMasterTable' => '',
'dashName' => 'forumsubscribers_dash_list',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'fa' => 'camera' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true,
'addRecord' => false,
'editRecord' => false,
'viewRecord' => false,
'inlineAdd' => false,
'inlineEdit' => false,
'copyRecord' => false,
'deleteRecords' => false,
'updateSelected' => false ),
'forumreplies_chart_chart' => array( 'type' => 'dashboard-item',
'table' => 'forumreplies_chart',
'dashType' => 1,
'reloadInterval' => 0,
'pageId' => '',
'detailsFilterByMaster' => false,
'detailsMasterTable' => '',
'dashName' => 'forumreplies_chart_chart',
'bsStyle' => 'primary',
'panelType' => 1,
'icon' => array( 'glyph' => 'calendar' ),
'viewTab' => true,
'editTab' => true,
'addTab' => true,
'initialTab' => 0,
'hiddenDetails' => array(  ),
'detailsOptions' => array(  ),
'mapUpdateGridWhenMoved' => true ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>