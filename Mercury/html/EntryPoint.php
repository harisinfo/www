<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 0);
ini_set("include_path","C:\\wamp\\www\\Mercury");

require('config.inc.php');
require('jp.config.inc.php');
require('dataconnect.php');
require('Smarty/libs/Smarty.class.php');

require('Factory/TemplateHandler.php');
require('Factory/ConfigManager.class.php');

include_once('RequestManager/processRequest.php');
include_once('LoginManager/LoginManager.class.php');

include_once('DBManager/dbManager.class.php');

$dispatch = create_dispatcher($request);




var_dump($dispatch);



$login_manager = new LoginManager();
$login_response = $login_manager->checkIfLoggedIn($request,$dispatch);


if(isset($dispatch['requires_login'])===TRUE && $dispatch['requires_login']===TRUE)
{
	if(isset($login_response['login'])===TRUE&&$login_response['login']==1
	&&isset($login_response['user_id'])===TRUE&&is_numeric($login_response['user_id'])===TRUE)
	{
		// all is good
		
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
	echo "Throw error and die";
	exit;
}
