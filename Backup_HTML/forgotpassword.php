<?php 
ob_start();
include_once("EntryPoint.php");
$response = array();
//$dob = $loginmanager->createDOB();

    if(isset($_POST)&&$_POST!=NULL){
    	$request['search']['user_type'] = 'USER';
        $response = $loginmanager->forgotPassword($request);
        $smarty->assign('response',$response);
    }

$smarty->assign('request',$request);
$smarty->display('forgotpassword.tpl');
?> 