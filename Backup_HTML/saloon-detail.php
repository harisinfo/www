<?php 
ob_start();
include_once("EntryPoint.php");
include_once("SearchManager/Search.php");

$search = new Search();
$saloons = $search->performSearchSaloons($request);
$saloon_employees = $search->performSearchSaloonEmployee($request);

$request['show_map'] = 1;

$configmanager = new ConfigManager();
$config_variables = $configmanager->getConfig();

$smarty->assign('request',$request);
$smarty->assign('saloons',$saloons);
$smarty->assign('config_variables',$config_variables);
$smarty->assign('saloon_employees',$saloon_employees);

$smarty->display('saloon-detail.tpl');

?> 