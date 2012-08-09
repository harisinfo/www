<?php
session_start();
include_once('functions/functions.inc.php');
if(isset($_SESSION)){
$response = array();
    foreach($_SESSION as $key => $value){
        if($key=='user_type'){
            $response[$key] = decrypt(cleanInput($value),KEYHASH);
        }else{
            $response[$key] = cleanInput($value);
        }
    }
    
    if($response['user_type']!='superadmin'&&$response['user_type']!='admin'&&$response['user_type']!='user'){
        header("Location: admin-index.php");
        exit;
    }
}else{
    header("Location: admin-index.php");
    exit;
}
?>
