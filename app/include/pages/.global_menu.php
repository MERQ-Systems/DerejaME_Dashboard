<?php
			$optionsArray = array( 'welcome' => array( 'welcomeItems' => array( 'logo' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'welcome_item' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'training_profile',
'page' => 'list' ),
'welcome_item1' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'event_profile',
'page' => 'list' ),
'welcome_item2' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'candidate_profile',
'page' => 'list' ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu' ),
'above-grid' => array(  ),
'grid' => array( 'welcome_item',
'welcome_item1',
'welcome_item2' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'welcome_item' => 'grid',
'welcome_item1' => 'grid',
'welcome_item2' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'welcome_item' => array( 'welcome_item',
'welcome_item1',
'welcome_item2' ) ),
'cellMaps' => array(  ) ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'menu',
'type' => 'menu',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
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
'grid' => array( 'modelId' => 'welcome',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'welcome_item',
'welcome_item1',
'welcome_item2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'welcome_item' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'training_profile',
'linkPage' => 'list',
'linkText' => array( 'table' => 'training_profile',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'hand-right' ),
'linkComments' => array( 'text' => 'Training Profile description',
'type' => 0 ),
'background' => '#7B68EE' ),
'welcome_item1' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'event_profile',
'linkPage' => 'list',
'linkText' => array( 'table' => 'event_profile',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'camera' ),
'linkComments' => array( 'text' => 'Event Profile description',
'type' => 0 ),
'background' => '#5F9EA0' ),
'welcome_item2' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'candidate_profile',
'linkPage' => 'list',
'linkText' => array( 'table' => 'candidate_profile',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'earphone' ),
'linkComments' => array( 'text' => 'Candidate Profile description',
'type' => 0 ),
'background' => '#B22222' ) ),
'dbProps' => array(  ),
'version' => 4,
'pageAlign' => 'center',
'fixedTopbar' => true );
		?>