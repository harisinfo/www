<?php 
ob_start();
include_once("EntryPoint.php");
include_once("AdviseManager/AdviseManager.class.php");
$advisemanager = new AdviseManager();
$response = $advisemanager->showSaloonPost();

if(isset($_REQUEST)&&$_REQUEST!=NULL){
    $response = $advisemanager->showSaloonPost($request);
}else{
    $response = $advisemanager->showSaloonPost();
    
}

global $subject_advises;

$smarty->assign('subject_advises',$subject_advises);
$smarty->assign('response',$response);
$smarty->assign('request',$request);
$smarty->display('saloon-advises-v2.tpl');
?> 