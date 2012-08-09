<?php 
ob_start();
include_once("EntryPoint.php");
$response = array();

    if(isset($_POST)&&$_POST!=NULL){
        $response = $loginmanager->forgotPassword($request);
    }

$smarty->assign('response',$response);
$smarty->assign('request',$request);
$smarty->display('forgot-password.tpl');
?> 