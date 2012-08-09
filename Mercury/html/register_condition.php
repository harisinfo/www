<?php 
ob_start();
include_once("EntryPoint.php");


include_once("ConditionManager/ConditionManager.class.php");
$condition_manager = new ConditionManager();
$condition_related_questions = $condition_manager->showConditionRelatedQuestions($request);

$smarty->assign('condition_related_questions',$condition_related_questions);
$smarty->display('register_condition.tpl');
