<?php 
ob_start();
include_once("EntryPoint.php");

if(isset($_POST)&&$_POST!=NULL){
        $response = $loginmanager->register($request,$login_response);
        $smarty->assign('response',$response);
}


$smarty->assign('request',$request);
$smarty->display('manage-add-employee.tpl');
?> 