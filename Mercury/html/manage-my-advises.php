<?php 
ob_start();
include_once("EntryPoint.php");
include_once("SearchManager/Search.php");
include_once("AdviseManager/AdviseManager.class.php");
$advisemanager = new AdviseManager();


if(!isset($login_response['saloon_id'])||$login_response['saloon_id']==''||$login_response['saloon_id']==NULL){
    header('Location: /login.php?action=logout');
    exit;
}

$response = array();


if(isset($_POST)&&$_POST!=NULL){
        $response = $advisemanager->removePost($request,$login_response);
}

$search = new Search();
$request['search']['saloon_id'] = $login_response['saloon_id'];
$saloon = $search->performSearchSaloons($request);
$saloon_posts = $search->performSearchSaloonPosts($request);

$smarty->assign('response',$response);
$smarty->assign('saloon',$saloon);
$smarty->assign('saloon_posts',$saloon_posts);
$smarty->display('manage-my-advises.tpl');
?> 
