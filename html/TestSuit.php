<?php
// Functional Test Suit
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("include_path","C:\\wamp\\www\\Mercury");

include_once('config.inc.php');
include_once('functions/functions.inc.php');

if(isset($_REQUEST['application'])===TRUE)
{
	$include_site_config = mysql_escape_string($_REQUEST['application']).".config.inc.php";
}
else
{
	die_with_header(404, "File Not Found");
}

if(!@include($include_site_config)) die_with_header(404, "File Not Found");

include_once( __APPLICATIONS_ROOT . '/' . __APPLICATION_DIR . '/' .'constants.config.inc.php');

global $db;
if(isset($db['host'])===TRUE&&trim($db['host'])!='')
{
	if(!@include_once('dataconnect.php')) die_with_header(500, "Internal Server Error");
}

include_once( __PLUGIN_DIR . '/Smarty/libs/Smarty.class.php');

include_once( __CORE_DIR . '/Factory/ConfigManager.class.php');
include_once( __CORE_DIR . '/RequestManager/processRequest.php');
include_once( __CORE_DIR . '/Factory/TemplateHandler.php');
include_once( __CORE_DIR . '/DBManager/dbManager.class.php');

// Begin Test on Module
$dispatch = create_dispatcher($request);


include_once( __SIMPLETEST_ROOT . '/autorun.php');
if(!@include_once($dispatch['test_file'])) die_with_header(500, "Internal Server Error");