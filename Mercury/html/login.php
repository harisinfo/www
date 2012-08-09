<?php 
ob_start();
include_once("EntryPoint.php");

if(isset($_POST) && $_POST['log_in'] == 'log in!'){
    $response = $loginmanager->login($request);
    
        $redirect_file = 'index.php';
        if($response['user_type']=='USER'){
            $redirect_file = 'view-my-hairstyles.php';
        }

        if($response['user_type']=='SALOON'){
            $redirect_file = 'manage-profile.php';
        }
        
    header("Location: /{$redirect_file}");
    exit;
}

if(isset($_GET) && $_GET['action'] == 'logout'){
    $response = $loginmanager->logout();
    header("Location: /index.php");
    exit;
}

?> 