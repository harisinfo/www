<?php 
ob_start();
include_once("EntryPoint.php");
include_once("SearchManager/Search.php");
include_once("UserManager/UserManager.class.php");

$user_manager = new UserManager();
$saloon_images = $user_manager->checkMaxSaloonImages($login_response);

$response = array();

    if(isset($_POST)&&$_POST!=NULL&&$_POST['type_action']=='delete'){
        //$user_manager->setSaloonPrimaryImage($login_response,$request);
        $remove_image = $user_manager->deleteImage($request);
        $smarty->assign('remove_image',$remove_image);
    }

$search = new Search();
$request['search']['saloon_id'] = $login_response['saloon_id'];
$saloon = $search->performSearchSaloons($request);

$smarty->assign('saloon',$saloon);
$smarty->assign('saloon_images',$saloon_images);
$smarty->display('manage-images.tpl');
?> 