<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("include_path","C:\\wamp\\www\\Mercury");

include_once('config.inc.php');
include_once('jp.config.inc.php');
include_once( __APPLICATIONS_ROOT . '/' . __APPLICATION_DIR . '/' .'constants.config.inc.php');
include_once('dataconnect.php');

// Include Plugins
include_once( __PLUGIN_DIR . '/Smarty/libs/Smarty.class.php');

// Include Core Modules
include_once( __CORE_DIR . '/Factory/ConfigManager.class.php');
include_once( __CORE_DIR . '/RequestManager/processRequest.php');
include_once( __CORE_DIR . '/Factory/TemplateHandler.php');
include_once( __CORE_DIR . '/DBManager/dbManager.class.php');

// Include Custom Modules, Example with login
include_once( __APPLICATIONS_ROOT . '/' . __APPLICATION_DIR . '/' . __MODULE_DIR .'/LoginManager/LoginManager.class.php');

// Create dispatcher, Modules loaded on the fly
$dispatch = create_dispatcher($request);
$login_manager = new LoginManager($request);
$login_response = $login_manager->checkIfLoggedIn($request,$dispatch);

// Handle dispatch
if(isset($dispatch['requires_login'])===TRUE && $dispatch['requires_login']===TRUE)
{
	if(isset($login_response['login'])===TRUE&&$login_response['login']==1
	&&isset($login_response['user_id'])===TRUE&&is_numeric($login_response['user_id'])===TRUE)
	{
		// all is good, do something with this later
	}
	else
	{
		unset($dispatch);
		$dispatch = create_dispatcher();
	}
}

if(isset($dispatch['class_name'])===TRUE)
{
	$module = new $dispatch['class_name'];
	$response = $module->init($request);
	
	$smarty->assign($dispatch['template_variable'],$response);
	$smarty->assign('request',$request);
	$smarty->display($dispatch['template']);
}
else
{
	echo "Handle this error gracefully";
	exit;
}
