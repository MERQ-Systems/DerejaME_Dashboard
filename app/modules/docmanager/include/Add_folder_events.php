<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_Add_folder  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["BeforeShowAdd"]=true;



	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		if ($values['name']=='')
	return false;

$values["parent_folder_id"]=$_SESSION["current_folder"];
$values['file_type']='folder';
$values["hash"]=generatePassword(HASH_LENGTH);
$values["created"]=runner_date_format("Y-m-d","");
$values["ownerid"]=$_SESSION["user_id"];

$folderSQL = "select * from ".AddTableWrappers("doc_files")." where ".addFieldWrappers("id")." = ".$_SESSION["current_folder"];
$folderRs = CustomQuery($folderSQL);
if($folderData = db_fetch_array($folderRs)){
	//if($folderData["ownerid"] == $_SESSION["user_id"] || $_SESSION["user_type"]=="admin" || Security::getUserName() == "Guest" && $folderData["share_ro"] == "Read / Write"){
		$values["share_ro"] = $folderData["share_ro"];
		$values["share_type"] = $folderData["share_type"];
		$values["share_users"] = $folderData["share_users"];
	//}
}

$oid = isOwner($_SESSION["current_folder"]);
$arr = explode(",",$values["share_users"]);
if(!in_array($oid,$arr)){
	if($values["share_users"])
		$values["share_users"].=",";
	$values["share_users"].= $oid;
}

return true;
;
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		echo '<script type="text/javascript" src="include/loadfirst.js"></script>
<script>
parent.location.reload();
</script>';
 
exit();

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, $pageObject)
{

		$xt->assign("header",false);
$xt->assign("footer",false);

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>