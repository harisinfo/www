<?php 
ob_start();
include_once("EntryPoint.php");

$configmanager = new ConfigManager();
$configmanager->updateGoogleLatLong($request);
?> 