<?php 
ob_start();
include_once("EntryPoint.php");
$response = array();
$dob = $loginmanager->createDOB();

    if(isset($_POST)&&$_POST!=NULL)
    {
        $response = $loginmanager->register($request);
    }

$smarty->assign('response',$response);
$smarty->assign('dob',$dob);
$smarty->assign('request',$request);
$smarty->display('register.tpl');
?> 