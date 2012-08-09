<?php 
ob_start();
include_once("EntryPoint.php");
include_once("AdviseManager/AdviseManager.class.php");
$advisemanager = new AdviseManager();

if(isset($_REQUEST)&&$_REQUEST!=NULL){
	
	if(isset($_POST)&&$_POST!=NULL){
		//Save here
		$error_response = $advisemanager->updateSaloonPost($request,$login_response);
	}
	
    $response = $advisemanager->showSaloonPost($request);
}

global $subject_advises;

$smarty->assign('subject_advises',$subject_advises);
$smarty->assign('response',$response);
$smarty->assign('error_response',$error_response);
$smarty->assign('request',$request);
$smarty->display('manage-edit-post.tpl');
?> 