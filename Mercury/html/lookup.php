<?php 
ob_start();
include_once("EntryPoint.php");
include_once("AjaxManager/AjaxHandler.php");

$ajaxmanager = new AjaxHandler();


$response = $ajaxmanager->performCityLookup($request);

header("Content-Type: application/json");
        
                echo "{\"results\": [";
                $arr = array();
                for ($i=0;$i<count($response);$i++)
                {
                        $arr[] = "{\"id\": \"".$response[$i]."\", \"value\": \"".$response[$i]."\", \"info\": \"\"}";
                }
                echo implode(", ", $arr);
                echo "]}";

//echo json_encode($response);
?> 