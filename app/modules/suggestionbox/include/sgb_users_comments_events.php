<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_sgb_users_comments  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeShowAdd"]=true;

		$this->events["ProcessValuesAdd"]=true;


		$this->events["BeforeShowList"]=true;




	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		
if(!Security::isLoggedIn()){
	if(!isset($_COOKIE["sgb_gsid"])){
		$sgb_gsid = time();
		runner_setcookie("sgb_gsid", $sgb_gsid, time() + 5 * 365 * 86400, "", "", false, false);
		runner_setcookie("sgb_name", $values["name"], time() + 5 * 365 * 86400, "", "", false, false);
		runner_setcookie("sgb_email", $values["email"], time() + 5 * 365 * 86400, "", "", false, false);
	}
	else{
		$sgb_gsid = $_COOKIE["sgb_gsid"];
	}
}
$ts = time();
$values["created_date"] = getYMDdate($ts) . " " . getHISdate($ts);

if(Security::getUserGroup() === "admin") {
	$values["status"] = "approved";
	$values["user_id"] = $_SESSION["uid"];
}
else {
	$values["status"] = "awaiting_moderation";
	$values["user_id"] = $sgb_gsid;
}
return true;
;
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, $pageObject)
{

		$xt->assign("stylename","sgb_suggestions_add sgb_comment_edit sgb");
$pageObject->AddCSSFile("styles/sgb.css");
;
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, $pageObject)
{

		$pageObject->AddCSSFile("styles/sgb.css");
$pageObject->setProxyValue("usergroup",Security::getUserGroup());

;
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, $pageObject)
{

		
if(Security::getUserGroup() === "admin"){
	$values["name"] = $_SESSION["udata"][GetDisplayNameField()];
	$values["email"] = $_SESSION["udata"][GetEmailField()];
}
if(!Security::isLoggedIn()){
	if(isset($_COOKIE["sgb_gsid"])){
		$values["name"] = $_COOKIE["sgb_name"];
		$values["email"] = $_COOKIE["sgb_email"];
	}

}
;
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
{

		$style = "sgb_suggestions_list sgb ".postvalue("orderby");
if(Security::isLoggedIn()){
	$style.= " login ".Security::getUserGroup();
}
$xt->assign("stylename",$style);

;
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>