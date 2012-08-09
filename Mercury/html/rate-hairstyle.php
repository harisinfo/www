<?php 
ob_start();
include_once("EntryPoint.php");
include_once("RatingManager/RatingManager.php");

$ratingmanager = new RatingManager();
var_dump($request);
$response_rating = $ratingmanager->rateHairStyle($request);

var_dump($response_rating);
?> 