<?php 
ob_start();
include_once("EntryPoint.php");
include_once("SearchManager/Search.php");

if(isset($_POST)&&$_POST!=NULL&&$_POST['type_action']=='delete'){
		// Lazy loading
		include_once("UserManager/UserManager.class.php");
        $user_manager = new UserManager();
        
        $remove_image = $user_manager->deleteImageHairStyle($request);
        $smarty->assign('remove_image',$remove_image);
}

$search = new Search();
$request['search']['user_id'] = $login_response['user_id'];
$user_hair_styles = $search->performSearchHairStyles($request);

$smarty->assign('user_hair_styles',$user_hair_styles);
$smarty->display('my-hair-styles.tpl');
?> 
