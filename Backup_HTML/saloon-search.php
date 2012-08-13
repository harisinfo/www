<?php 
ob_start();
include_once("EntryPoint.php");
include_once("SearchManager/Search.php");

$search = new Search();
$saloons = $search->performSearchSaloons($request);

$smarty->assign('request',$request);
$smarty->assign('saloons',$saloons);
$smarty->display('saloon-search.tpl');
?> 
