<?php 
ob_start();
include_once("EntryPoint.php");
include_once("RatingManager/RatingManager.php");

$ratingmanager = new RatingManager();
$response = $ratingmanager->rateHairStyle($request);


dumpVariable($request);
dumpVariable($response);

/*$smarty->assign('request',$request);
$smarty->assign('saloons',$saloons);
$smarty->display('search.tpl');*/
?> 
