<?php
global $debug, $template_dir, $compile_dir, $config_dir, $cache_dir;

if(isset($request['search']['override_template']) === TRUE)
{
	$template_dir = $request['search']['override_template'];
}

$smarty = new Smarty;
$smarty->debugging = $debug;
$smarty->template_dir = $template_dir;
$smarty->compile_dir = $compile_dir;
$smarty->config_dir = $config_dir;
$smarty->cache_dir = $cache_dir;
