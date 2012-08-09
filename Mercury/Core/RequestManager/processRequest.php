<?php
global $debug;

include_once('functions/functions.inc.php');
$request = array();

if(isset($_REQUEST))
{
    $request['search'] = prepareVar_array($_REQUEST);
}

if(isset($_SESSION))
{
    $request['session'] = prepareVar_array($_SESSION);
}

if(!isset($request['session']['ticket']))
{
    $_SESSION['ticket'] = SITE_IDENTIFIER . "_". time();
}
