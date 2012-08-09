<?php 
ob_start();
include_once("EntryPoint.php");

$object = new $dispatch['class_name']($dispatch);

$var_response = $object->init($request);

$template = $dispatch['template'];
$smarty_variable = $dispatch['template_variable'];
$smarty->assign($smarty_variable,$var_response);
$smarty->display("$template");