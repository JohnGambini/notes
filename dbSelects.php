<?php
/*--------------------------------------------------------------------------------------------
 * dbSelects.php
 *
 * Copyright 2015 2016 2017 2018 by John Gambini
 *
 ---------------------------------------------------------------------------------------------*/
session_start();

$old_error_handler = set_error_handler("myErrorHandler");

$errorMessage = '';
$successMessage = '';
$debugMessage = '';

function myErrorHandler($errno, $errstr, $errfile, $errline)
{
	$errorMessage = 'dbSelects.php: ' . $errstr . ' in ' . $errfile . ' line number: ' . $errline;
	$successMessage = '';
	$debugMessage = 'No debug output.';
	exit(json_encode(array($errorMessage,$successMessage,$debugMessage)));
}

define('ABSDIR', dirname(__FILE__));

require_once( ABSDIR . '\config\app_defs.php');
require_once( WORKBENCH_DIR . '\php\objects\wbDatabase.php');
require_once( WORKBENCH_DIR . '\php\objects\mysqliDatabase.php');
require_once( WORKBENCH_DIR . '\php\objects\pdoDatabase.php');
require_once( WORKBENCH_DIR . '\php\objects\dbObject.php');
require_once( WORKBENCH_DIR . '\php\objects\dbUser.php');
require_once( WORKBENCH_DIR . '\php\objects\dbContent.php');
require_once( WORKBENCH_DIR . '\php\objects\wbSql.php');
require_once( WORKBENCH_DIR . '\php\objects\wbDataArrays.php');
require_once( WORKBENCH_DIR . '\php\includes\wb_functions.php');
require_once( WORKBENCH_DIR . '\php\includes\galleryWidgetString.php');

$userObj = new dbUser();
$dbObj = new mysqliDatabase();

$errorMessage = '';
$successMessage = '';
$debugMessage = '';

if( ! $dbObj->connect(DB_HOST,DB_USER,DB_PASSWORD,DATABASE,DB_CHARSET)) {
	$errorMessage = $dbObj->error;
	die(json_encode(array($errorMessage,$successMessage,$debugMessage)));
}

if( empty($_SESSION['userID']) or isset($_GET["signoff"]))
{
	session_destroy();
	session_write_close();

} else if ( $userObj->get_user($dbObj,$_SESSION['userID']) == false ) {
	$errorMessage = $errorMessage . $dbObj->error . "<br/>";
	die(json_encode(array($errorMessage,$successMessage,$debugMessage)));
}

$contentId = isset($_POST['contentId']) ? $_POST['contentId'] : NULL;
if( $contentId == NULL)
	$errorMessage = "contentId not set in request<br/>";

$parentId = isset($_POST['parentId']) ? $_POST['parentId'] : NULL;
if($parentId == NULL)
	$errorMessage = $errorMessage . 'parentId not set in request<br/>';

$debugMessage = 'contentId = ' . $contentId .
	'<br/>parentId=' . $parentId;
	
/*
 $errorMessage = "This script is still being debugged";
 die(json_encode(array($errorMessage,$successMessage,$debugMessage)));
 */

/* Get the content object */
$contentObj = new dbContent();
$contentObj->ID = $contentId;
if($contentObj->get_content_by_id($dbObj,$userObj) == false) {
	$errorMessage = "dbSelect: " . $contentObj->db_error;
}
	
$sqlObject = new wbSql($userObj,$contentObj);

$dataArrays = new wbDataArrays();

if(strlen($errorMessage))
	exit(json_encode(array($errorMessage,$successMessage,$debugMessage)));

if( isset($_POST['getPost'])) {
	
	$tabName = isset($_POST['tabName']) ? $_POST['tabName'] : "";
	$dataArrays->get_tabsArray($dbObj, $sqlObject, $contentId);
	
	$debugMessage = 'contentId = ' . $contentId .
	'<br/>parentId=' . $parentId .
	'<br/>tabName=' . $tabName;
	
	if(strlen($tabName) == 0) {
		$errorMessage = "dbSelects: tabName undefined";
		echo json_encode(array($errorMessage,$successMessage,$debugMessage));
	}
	
	$articleData = array(
			replace_wb_variable($dataArrays->tabsArray[$tabName]['articleText'],$dbObj, $sqlObject, $contentObj, $dataArrays),
			'Last Modified: ' . $dataArrays->tabsArray[$tabName]['dateModified'],
			//unproccessed text for the client editor
			"" . $dataArrays->tabsArray[$tabName]['articleText']
	);
	
	exit(json_encode(array($errorMessage,$successMessage,$debugMessage, $articleData )));

}

$dbObj->close();

?>


?>