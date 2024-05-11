<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_todoboards  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeProcessList"]=true;

		$this->events["AfterDelete"]=true;

		$this->events["BeforeShowEdit"]=true;


		$this->events["BeforeShowView"]=true;

		$this->events["BeforeShowList"]=true;


		$this->events["BeforeProcessAdd"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeProcessEdit"]=true;

		$this->events["BeforeProcessRowList"]=true;


	}

//	handlers

				// List page: Before process
function BeforeProcessList($pageObject)
{

		global $cLoginTable, $cUserNameField, $cPasswordField, $loginKeyFields;

global $cman;
DB::SetConnection(DB::ConnectionByTable($cLoginTable));
$userRs = DB::Select( $cLoginTable, "" );
$userData = array();
while( $data = $userRs->fetchAssoc() ) {
    $userData[ $data["id"] ] = $data;
}
DB::SetConnection(DB::DefaultConnection());

if(postvalue("a") == "assignuser"){
	DB::Update("todocards", array("assign"=>postvalue("userid")), array("id"=>postvalue("cardid")));
	//$rs = DB::Query("select * from ".$cLoginTable." where id = ".postvalue("userid"));
	$data = $userData[postvalue("userid")];
	if($data){
		if($data["avatar"]){
			$avatar = my_json_decode($data["avatar"]);
			echo "<img class='assignUser' title='".$data["fullname"]." (".$data[$cUserNameField].")' src='mfhandler.php?file=".$avatar[0]["usrName"]."&table=".$cLoginTable."&field=avatar&pageType=list&page=list&key1=".postvalue("userid")."&nodisp=1'>";
		}
		else{
			if($data["fullname"])
				echo "<span class='assignUser assignText' title='".$data["fullname"]." (".$data[$cUserNameField].")'>".strtoupper(substr($data["fullname"],0,1))."</span>";
			else
				echo "<span class='assignUser assignText' title='".$data["fullname"]." (".$data[$cUserNameField].")'>".strtoupper(substr($data[$cUserNameField],0,1))."</span>";
		}
	}
	else{
		echo "none";
	}
	exit();
}
if(postvalue("a") == "getusers"){
	//$rs = DB::Query("select * from ".$cLoginTable);
	$out = "<div class=user_assign val='0'>None</div>";
	foreach($userData as $data){
		$user = $data["fullname"];
		if(!$user)
			$user = $data[$cUserNameField];
		$out.= "<div class=user_assign val='".$data["id"]."'>".$user."</div>";
	}
	echo $out;
	exit();
}	
//getCardValue
/*if(postvalue("a") == "afterCardCreated"){
	include_once("todolist_custom.php");
	afterCardCreated(postvalue("cardid"));
	$rs = DB::Query("select * from todocards where id = ".postvalue("cardid"));
	$datad = $rs->fetchAssoc();
	echo prepareCard($datad);
	exit();
}*/
/*if(postvalue("a") == "afterCardCreated"){
	include_once("todolist_custom.php");
	afterCardCreated(postvalue("cardid"));
	exit();
}*/
/*if(postvalue("a") == "afterMove"){
	include_once("todolist_custom.php");
	afterMoveCard(postvalue("cardid"));
	$rs = DB::Query("select * from todocards where id = ".postvalue("cardid"));
	$datad = $rs->fetchAssoc();
	$val = prepareCard($datad);
	echo $val;
	exit();
}*/
if(postvalue("a") == "lastCardID"){
	DB::Insert("todocards",array("listid"=>0,"cardname"=>'',"categoryid"=>0, "boardid"=>0));
	$lastid = DB::LastId();
	DB::Delete("todocards", array("id"=>$lastid));
	echo $lastid+1;
	die();
}
if(postvalue("a") == "lastListID"){
	DB::Insert("todolists", array("listname"=>'',"listorder"=>0,"boardid"=>0));
	$lastid = DB::LastId();
	DB::Delete("todolists", array("id"=>$lastid));
	echo $lastid+1;
	die();
}
if(postvalue("a") == "getlist" && postvalue("id")){
	$lid = postvalue("lid");
	$rs = DB::Select("todolists", array("id"=>$lid));
	$data = $rs->fetchAssoc();
	$bid = $data["boardid"];
	$rs = DB::Query("select * from ".addTableWrappers("todolists")." where ".addFieldWrappers("boardid")."=".$bid." and ".addFieldWrappers("id")."<>".$lid);
	$out = "";
	while($data = $rs->fetchAssoc())
		$out.= "<div class=list_assign val='".$data["id"]."'>".$data["listname"]."</div>";
	echo $out;
	exit();
}	

if(postvalue("a") == "deleteboard" && postvalue("deleteid")){
	$did = str_replace("board_","",postvalue("deleteid"));
	DB::Delete("todolists", array("id"=>$did));
	DB::Delete("todocards", array("listid"=>$did));
	echo "ok";
	exit();
}

if(postvalue("a") == "deletecard" && postvalue("deleteid")){
	DB::Delete("todocards", array("id"=>postvalue("deleteid")));
	echo "ok";
	exit();
}

if(postvalue("a") == "saveboardname"){
	DB::Update("todoboards", array("boardname"=>str_replace("'","''",postvalue("name"))), array("id"=>postvalue("bid")));
	exit();
}

if(postvalue("a") == "saveboard" && postvalue("json")){
	if(postvalue("id") == 0){
		DB::Insert("todoboards", array("boardname"=>postvalue("name"), "userid"=>Security::getUserName()));
		$boardID = DB::LastId();
	}
	else{
		DB::Update("todoboards", array("boardname"=>postvalue("name")), array("id"=>postvalue("id")));
		$boardID = postvalue("id");
	}
	$json = my_json_decode(postvalue("json"));
	foreach($json as $board){
		$rs = DB::Query("select count(".addFieldWrappers("id").") as ".addFieldWrappers("c")." from ".addTableWrappers("todolists")." where ".addFieldWrappers("id")."=".$board["id"]);
		$data = $rs->fetchAssoc();
		if($data["c"]>0 && postvalue("id")>0){
			DB::Update("todolists", array("listname"=>str_replace("'","''",$board["boardName"]), "listorder"=>$board["order"], "boardid"=>$boardID), array("id"=>$board["id"]));
			$sectionID = $board["id"];
		}
		else{
			DB::Insert("todolists", array("listname"=>str_replace("'","''",$board["boardName"]),"listorder"=>$board["order"],"boardid"=>$boardID));
			$sectionID = DB::LastId();
		}
		//$sql = DB::PrepareSQL("select * from ".$cLoginTable." where ".$cUserNameField."=':1'",Security::getUserName());
		//$rs = DB::Query($sql);
		//$data = $rs->fetchAssoc();
		$data = Security::currentUserData();
		$days = $data["daystoadd"]; 
		if(!$days)
			$days = 0;
		foreach($board["items"] as $key=>$name){
				$rs = DB::Query("select count(".addFieldWrappers("id").") as".addFieldWrappers("c")." from ".addTableWrappers("todocards")." where ".addFieldWrappers("id")."=".$board["ids"][$key]);
				$data = $rs->fetchAssoc();
				$assign=0;
				if($board["assigns"][$key])
					$assign = $board["assigns"][$key];
				$categoryid=0;
				if($board["colors"][$key])
					$categoryid = $board["colors"][$key];
				if($data["c"]>0)
					DB::Update("todocards", array("boardid"=>$boardID, "listid"=>$sectionID,"categoryid"=>$categoryid, "cardorder"=>$board["orders"][$key], "assign"=>$assign), array("id"=>$board["ids"][$key]));
				else{
					DB::Insert("todocards", array("boardid"=>$boardID, "listid"=>$sectionID,"cardname"=>str_replace("'","''",$name),"categoryid"=>$categoryid,"cardorder"=>$board["orders"][$key],"assign"=>$assign, "duedate"=>date("Y-m-d",strtotime(now())+60*60*24*$days), "ownerid"=>Security::getUserName(), "startdate"=>date("Y-m-d")));
				}
		}
	}
	$value = "";
	if(postvalue("event") == "afterCardCreated"){
		include_once("todolist_custom.php");
		afterCardCreated(postvalue("cardid"));
		$rs = DB::Select("todocards", array("id"=>postvalue("cardid")));
		$datad = $rs->fetchAssoc();
		$value = prepareCard($datad);
	}
	if(postvalue("event") == "afterMove"){
		include_once("todolist_custom.php");
		afterMoveCard(postvalue("cardid"));
		$rs = DB::Select("todocards",array("id"=>postvalue("cardid")));
		$datad = $rs->fetchAssoc();
		$value = prepareCard($datad);
	}
	echo my_json_encode(array($boardID,$value));
	exit();
}
if(postvalue("a") == "board"){
	include_once("todolist_custom.php");
	$bid = postvalue("id");
	if(!$bid && postvalue("copyid"))
		$bid = postvalue("copyid");
	$boardOwner = DBLookup("select ".addFieldWrappers("userid")." from ".addTableWrappers("todoboards")." where ".addFieldWrappers("id")."=".$bid);
	$item = array();
	/*$i=1;
	$b=1;
	while($data = $rs->fetchAssoc()){
		$arr = array();
		$arr["id"] = $data["id"];
		$arr["title"] = $data["name"];
		$item[] = $arr;
	}
	$board["id"] = "userslist";
	$board["title"] = "unAssigned";
	$board["item"] = $item;
	$boardtmp[] = $board;*/
	$uData = Security::currentUserData();
	$uname = $uData[$cUserNameField];
	$uid = $uData[$loginKeyFields[0]];
	$boards = array();
	$boards["isAdmin"] = false;;
	if($uname == $boardOwner)
		$boards["isAdmin"] = true;
	$search = "";
	if($_SESSION["board_where"])
		$search = " and UPPER(".addFieldWrappers("cardname").") LIKE '%".strtoupper($_SESSION["board_where"])."%'";
	if(!$search)
		$rs = DB::Query("select * from ".addTableWrappers("todolists")." where ".addFieldWrappers("boardid")."=".$bid." order by ".addFieldWrappers("listorder").", ".addFieldWrappers("id"));
	else
		$rs = DB::Query("select l.* from ".addTableWrappers("todolists")." l left join ".addTableWrappers("todocards")." c on ".addFieldWrappers("listid")."=l.".addFieldWrappers("id")." where l.".addFieldWrappers("boardid")."=".$bid.$search." order by l.".addFieldWrappers("listorder").", l.".addFieldWrappers("id"));
	$bNum = 1;
	while($data = $rs->fetchAssoc()){
	
		$cnt1=DBLookup("select count(".addFieldWrappers("id").") from ".addTableWrappers("todocards")." where ".addFieldWrappers("assign")."=".$uid." and ".addFieldWrappers("listid")."=".$data["id"]);
		$cnt2=DBLookup("select count(".addFieldWrappers("id").") from ".addTableWrappers("todocards")." where ".addFieldWrappers("ownerid")."='".$uname."' and ".addFieldWrappers("listid")."=".$data["id"]);
		if($boardOwner == $uname || $boardOwner != $uname && ($cnt1>0 || $cnt2>0))
			$a=1;
		else
			continue;
		$board = array();
		$board["id"] = "board_".$data["id"];
		$board["title"] = $data["listname"];
		if(postvalue("editing")=="false")
			$board["dragTo"] = 'none_id';
		$rsd = DB::Query("select ".addFieldWrappers("todocards").".*, ".addFieldWrappers("color")." from ".addFieldWrappers("todocards")." left join ".addFieldWrappers("todocategories")." on ".addFieldWrappers("todocategories").".".addFieldWrappers("id")."=".addFieldWrappers("todocards").".".addFieldWrappers("categoryid")." where ".addFieldWrappers("todocards").".".addFieldWrappers("listid")." = ".$data["id"].$search." order by ".addFieldWrappers("todocards").".".addFieldWrappers("cardorder"));
		$item = array();
		while($datad = $rsd->fetchAssoc()){
			//echo $datad["assign"]." == ".$uid." || ".$datad["ownerid"]." == ".$uname." || ".$datad["assign"]." == 0 && ".$boardOwner." == ".$uname."<br>";
			if($datad["assign"] == $uid || $datad["ownerid"] == $uname || $datad["assign"] == 0 && $boardOwner == $uname )
				$a=1;
			else
				continue;
			$arr = array();
			$arr["id"] = "item_".$datad["id"];
			$arr["title"] = "<span class='title_row' bgcolor='".$datad["categoryid"]."' assign='".$datad["assign"]."' value='".$datad["cardname"]."'>".prepareCard($datad)."</span><span class='bgcolor_row' style='background-color:".$datad["color"]."'>&nbsp;&nbsp;&nbsp;</span>";
			$arr["title"].= "<span id='editrow_".$datad["id"]."' class='btn btn-default btn-xs edit_b glyphicon glyphicon-menu-hamburger' style='left:8px;top:-2px;display:none;'></span>";
			if($datad["assign"]){
				$ava = "<div class='divAssignUser' id='assignUser_".$datad["id"]."'>";
				$uData = $userData[$datad["assign"]];
				if($uData["avatar"]){
					$avatar = my_json_decode($uData["avatar"]);
					$ava.= "<img class='assignUser' title='".$uData["fullname"]." (".$uData[$cUserNameField].")' src='mfhandler.php?file=".$avatar[0]["usrName"]."&table=".$cLoginTable."&field=avatar&pageType=list&page=list&key1=".$datad["assign"]."&nodisp=1'>";
				}
				else{
					if($uData["fullname"])
						$ava.= "<span class='assignUser assignText' title='".$uData["fullname"]." (".$uData[$cUserNameField].")'>".strtoupper(substr($uData["fullname"],0,1))."</span>";
					else
						$ava.= "<span class='assignUser assignText' title='".$uData["fullname"]." (".$uData[$cUserNameField].")'>".strtoupper(substr($uData[$cUserNameField],0,1))."</span>";
				}
				$ava.= "</div>";
				$arr["title"].= $ava;
			}
			$arr["footer"] = "";
			$item[] = $arr;
		}

		$board["item"] = $item;
		$boardtmp[] = $board;
	}
	
	$rs = DB::Query("select max(".addFieldWrappers("id").") as ".addFieldWrappers("mid")." from ".addFieldWrappers("todolists"));
  $data = $rs->fetchAssoc();
			$bNum = $data["mid"]+1;

	if(count($boardtmp)>0)
		$boards["boards"] = $boardtmp;
	$boards["bNum"] = $bNum;
	$boards["permCart"] = Security::getPermissions("todocards");
	$boards["permList"] = Security::getPermissions("todolists");
	$boards["permComment"] = Security::getPermissions("todocomments");
	$rscomm = DB::Query("select cardid from todocomments group by cardid");
	$countcomm = array();
	while($datacomm = $rscomm->fetchAssoc()){
		$countcomm[$datacomm["cardid"]] = DBLookup("select count(id) from todocomments where cardid=".$datacomm["cardid"]);
	}
	$boards["commentAmount"] = $countcomm;
	echo my_json_encode($boards);
	exit();
}
if(postvalue("a") == "assign"){
	$rs = DB::Select("todocategories",array("id"=>postvalue("colorid")));
	$color = "";
	$id = 0;
	if($data = $rs->fetchAssoc()){
		$color = $data["color"];
		$id = $data["id"];
	}
	echo my_json_encode(array($color,$id));
	exit();
}
if(postvalue("a") == "getcolor"){
	$rs = DB::Select("todocategories",array("id"=>postvalue("colorid")));
	$data = $rs->fetchAssoc();
	echo $data["color"];
	exit();
}
;
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where, &$deleted_values, &$message, $pageObject)
{

		$rs = DB::Select("todolists", array("boardid"=>$deleted_values["id"]));
while($data = $rs->fetchAssoc())
	DB::Delete("todocards", array("listid"=>$data["id"]));
DB::Delete("todolists", array("boardid"=>$deleted_values["id"]));

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, $pageObject)
{

		global $cUserNameField;
$pageObject->AddJSFile( "include/jkanban.js" );
$pageObject->AddJSFile( "include/jkanban_functions.js" );
$pageObject->AddCSSFile( "include/jkanban.css" );
$pageObject->setProxyValue("id",$values["id"]);
$pageObject->setProxyValue("search",postvalue("q"));
$xt->assign("header","");
$data = Security::currentUserData();
if($data[$cUserNameField] == $values["userid"])
	$pageObject->setProxyValue("permiss","true");
;
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowView(&$xt, &$templatefile, &$values, $pageObject)
{

		$pageObject->AddCSSFile( "include/jkanban.css" );

;
} // function BeforeShowView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
{

		$pageObject->AddCSSFile( "include/board_list.css" );
//include_once("todolist_custom.php");

$perm = Security::getPermissions("todoboards"); 
if($perm["A"] == 1)
	$pageObject->setProxyValue("permissA","true");
;
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Add page: Before process
function BeforeProcessAdd($pageObject)
{

		$rs = DB::Query("select * from ".addFieldWrappers("todoboards")." where ".addFieldWrappers("boardname")." LIKE 'Board%'");
$maxvalue = 0;
while($data = $rs->fetchAssoc()){
	$name = trim(str_replace("Board ","",$data["boardname"]));
	echo $name;
	if(is_numeric($name)){
		if($name > $maxvalue)
			$maxvalue = $name;
	}
}
$boardname = "Board ".($maxvalue+1);

DB::Insert("todoboards", array("boardname"=>$boardname, "userid"=>Security::getUserName()));
$bid = DB::LastId();
DB::Insert("todolists", array("listname"=>"List 1", "listorder"=>1, "boardid"=>$bid));
$lid = DB::LastId();
DB::Insert("todocards", array("boardid"=>$bid, "listid"=>$lid, "cardname"=>GetCustomLabel("start_cardname2"), "categoryid"=>0, "cardorder"=>0, "assign"=>0, "duedate"=>date("Y-m-d",strtotime(now())+60*60*24*90), "ownerid"=>Security::getUserName()));

header("Location: todoboards_edit.php?editid1=".$bid);
exit();
;
} // function BeforeProcessAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		$values["ownerid"]=Security::getUserName();

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
				// Edit page: Before process
function BeforeProcessEdit($pageObject)
{

		if(postvalue("a") == "search")
	$_SESSION["board_where"] = postvalue("q");
if(postvalue("a") == "showAll")
	$_SESSION["board_where"] = "";


// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function BeforeProcessEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before record processed
function BeforeProcessRowList(&$data, $pageObject)
{

		
$udata = Security::currentUserData();
global $loginKeyFields, $cUserNameField;

$cnt = DBLookup("select count(".addFieldWrappers("id").") as ".addFieldWrappers("cnt")." from ".addFieldWrappers("todocards")." where ".addFieldWrappers("boardid")."=".$data["id"]." and ".addFieldWrappers("assign")."=".$udata[$loginKeyFields[0]]);
if($data["userid"] == $udata[$cUserNameField] || $cnt>0)
	return true;	
else
	return false;
;
} // function BeforeProcessRowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>