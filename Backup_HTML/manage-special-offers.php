<?php 
ob_start();
include_once("EntryPoint.php");
include_once("SearchManager/Search.php");

if(!isset($login_response['saloon_id'])||$login_response['saloon_id']==''||$login_response['saloon_id']==NULL){
    header('Location: /login.php?action=logout');
    exit;
}

$response = array();

    if(isset($_POST)&&$_POST!=NULL){
        $response = $loginmanager->updateSaloonMisc($request,$login_response);
    }

$search = new Search();
$request['search']['saloon_id'] = $login_response['saloon_id'];
$saloon = $search->performSearchSaloons($request);

$smarty->assign('response',$response);
$smarty->assign('saloon',$saloon);
$smarty->assign('saloon_images',$saloon_images);
$smarty->display('manage-special-offers.tpl');
?> 