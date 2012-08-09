<?php 
ob_start();
include_once("EntryPoint.php");
include_once("SearchManager/Search.php");

$search = new Search();
$user_hair_styles = $search->performSearchHairStyles($request);
$smarty->assign('user_hair_styles',$user_hair_styles);
$smarty->display('top.tpl');
?> 
