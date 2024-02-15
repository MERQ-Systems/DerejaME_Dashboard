<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["candidate_profile"] ) ) {
			$lookupTableLinks["candidate_profile"] = array();
		}
		if( !isset( $lookupTableLinks["candidate_profile"]["training_profile.ID"] )) {
			$lookupTableLinks["candidate_profile"]["training_profile.ID"] = array();
		}
		$lookupTableLinks["candidate_profile"]["training_profile.ID"]["edit"] = array("table" => "training_profile", "field" => "ID", "page" => "edit");
		if( !isset( $lookupTableLinks["training_profile"] ) ) {
			$lookupTableLinks["training_profile"] = array();
		}
		if( !isset( $lookupTableLinks["training_profile"]["event_profile.ID"] )) {
			$lookupTableLinks["training_profile"]["event_profile.ID"] = array();
		}
		$lookupTableLinks["training_profile"]["event_profile.ID"]["edit"] = array("table" => "event_profile", "field" => "ID", "page" => "edit");
		if( !isset( $lookupTableLinks["training_profile"] ) ) {
			$lookupTableLinks["training_profile"] = array();
		}
		if( !isset( $lookupTableLinks["training_profile"]["candidate_profile.ID"] )) {
			$lookupTableLinks["training_profile"]["candidate_profile.ID"] = array();
		}
		$lookupTableLinks["training_profile"]["candidate_profile.ID"]["edit"] = array("table" => "candidate_profile", "field" => "ID", "page" => "edit");
}

?>