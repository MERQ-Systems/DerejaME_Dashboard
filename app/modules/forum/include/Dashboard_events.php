<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_Dashboard  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowDashboard"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowDashboard(&$xt, &$templatefile, $pageObject)
{

		init_forum($pageObject, $xt, false);
$_SESSION["results_message"] = '&nbsp;';
// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function BeforeShowDashboard

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		


		// dashboatd snippets function
	function event_Dashboard_snippet( &$header, &$icon )
	{
		global $cLoginTable, $cDisplayNameField, $cUserNameField,$cUserpicField;
$header = "My info";
$userData = Security::currentUserData();


	DB::SetConnection(DB::ConnectionByTable(Security::getLoginTable()));
	$rs = DB::Select(Security::getLoginTable(),array($_SESSION["loginKeyField"] =>$userData[$_SESSION["loginKeyField"]]));
$data = $rs->fetchAssoc();
	DB::SetConnection(DB::DefaultConnection());

echo "<table cellpadding=10px cellspacing=0px border=0>";
echo "<tr><td width=100px style=''>".GetCustomLabel("display_name")."</td><td>".$data[$cDisplayNameField]."</td></tr>";


echo "<tr><td colspan=2 style='padding-top:10px'>";
if(is_null( $_SESSION["forumudata"]["image"] )) {
	$cur_user = Security::currentUserData();
	echo "<div class='user-circle in_dashboard'><span class='user-initials'>".substr(strtoupper($cur_user[$cDisplayNameField]),0,1)."</span></div>";

}
else{
	echo "<img width=200px src='avatars/".$_SESSION["forumudata"]["image"]."'>";
}

echo "</td></tr>";
echo "</table>";
;
	}

}
?>