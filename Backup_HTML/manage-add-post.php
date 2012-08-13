<?php 
ob_start();
include_once("EntryPoint.php");
include_once("AdviseManager/AdviseManager.class.php");
$advisemanager = new AdviseManager();

if(isset($_POST)&&$_POST!=NULL){
		$response = $advisemanager->registerPost($request,$login_response);
        $smarty->assign('response',$response);
}

global $subject_advises;

$smarty->assign('subject_advises',$subject_advises);
$smarty->assign('request',$request);
$smarty->display('manage-add-post.tpl');
?> 