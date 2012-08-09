<?php 
ob_start();
include_once("EntryPoint.php");

if(isset($_POST)&&isset($_FILES)&&$_FILES!=NULL){
    include_once('UserManager/UserManager.class.php');
    $user_manager = new UserManager();
    $request['search']['upload_type'] = 'profile';
    $user_manager->uploadImage($login_response,$_FILES,$request);
    header("Location: /manage-images.php");
    exit;
}

?> 
