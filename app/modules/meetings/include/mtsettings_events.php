<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_mtsettings  extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, $pageObject)
{

		global $cman;
$conn = $cman->byTable( $pageObject->tName );
$arr = $conn->getTableList();

$arrt = array_diff($arr, array("mtsettings"));

global $cLoginTable,$globalSettings;
$tables = array();
if($cLoginTable && $globalSettings["nLoginMethod"]==1){
	$arrt[0] = $cLoginTable;
	$conn = $cman->byTable( $cLoginTable );
}
else
	$arrt = array_diff($arr, array("mtsettings"));

foreach($arrt as $t){
	$arrf = $conn->getFieldsList("select * from ".addTableWrappers($t)." where 1=0");
	$fields = array();
	foreach($arrf as $f)
		$fields[] = $f["fieldname"];
	$tables[$t] = $fields;
}
$pageObject->setProxyValue("tables",$tables);
$pageObject->setProxyValue("fieldsvalue",array("namefield"=>$values["namefield"],"phonefield"=>$values["phonefield"],"emailfield"=>$values["emailfield"],"idfield"=>$values["idfield"]));
$pageObject->setProxyValue("tablevalue",$values["userstable"]);
$pageObject->setProxyValue("timezone",$values["timezone"]);

;
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject)
{

		$fillSettings = true;
if(!$values["provider"])
	$fillSettings = false;
if($values["provider"] == "RingCentral" && (!$values["RC_APIServerURL"] || !$values["RC_ClientID"] || !$values["RC_ClientSecret"] || !$values["RC_Account"] || !$values["RC_Password"]))
	$fillSettings = false;
if($values["provider"] == "Zoom" && !$values["Z_Token"])
	$fillSettings = false;
if($data["provider"] == "Microsoft Graph" && (!$data["MS_ClientID"] || !$data["MS_ClientSecret"] || !$data["MS_TenantID"]))
	$fillSettings = false;
if($data["provider"] == "Google Meet" && (!$data["G_ClientID"] || !$data["G_ClientSecret"] || !$data["G_APIKey"]))
	$fillSettings = false;
if(!$values["userstable"] || !$values["idfield"] || !$values["namefield"] || !$values["emailfield"] && !$values["phonefield"] || !$values["timezone"])
	$fillSettings = false;
if($data["provider"] == "WEBEX" && (!$data["WB_ClientID"] || !$data["WB_ClientSecret"]))
	$fillSettings = false;

if(!$fillSettings){
	$message = GetCustomLabel("fill_all_required_settings");
	return false;
}

return true;
;
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>