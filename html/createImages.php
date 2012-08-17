<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 0);
ini_set("include_path","C:\\wamp\\www\\Mercury");

include_once('config.inc.php');
include_once('jp.config.inc.php');
include_once( __APPLICATIONS_ROOT . '/' . __APPLICATION_DIR . '/' .'constants.config.inc.php');
include_once('dataconnect.php');

// Include Plugins
include_once( __PLUGIN_DIR . '/Smarty/libs/Smarty.class.php');

// Include Core Modules
include_once( __CORE_DIR . '/Factory/ConfigManager.class.php');
include_once( __CORE_DIR . '/RequestManager/processRequest.php');
include_once( __CORE_DIR . '/Factory/TemplateHandler.php');
include_once( __CORE_DIR . '/DBManager/dbManager.class.php');
include_once( __CORE_DIR . '/ImageManager/ImageManager.class.php');

// Include Custom Modules, Example with login
include_once( __APPLICATIONS_ROOT . '/' . __APPLICATION_DIR . '/' . __MODULE_DIR .'/LoginManager/LoginManager.class.php');

$im = new ImageManager();

$sql = "SELECT * FROM product_detail_image ORDER BY product_detail_image_id ASC";
$result = $connection->query($sql);

while($row=$result->fetch_array(MYSQLI_ASSOC))
{
	//$im->createImage();
	//sleep(1);
	$image = __PRODUCT_IMAGES_DIR_PATH . $row['image_id'].".".$row['image_extension'];
	$request['image_id'] = $row['image_id'];
	
	
	$r = getimagesize("{$image}");
	list($width, $height, $type, $attr, $mime) = $r;
	if($width >= $height)
	{
		$d = $width;
	}
	else
	{
		$d = $height;
	}
	
	$pow = strlen((string) $d) - 1;
	
	$next_biggest =  floor(($d/pow(10, $pow))) * pow(10, $pow) + pow(10, $pow);
	
	$request['image'] = $image;
	$request['width'] = $width;
	$request['height'] = $height;
	
	$request['blank_image_size'] = intval($next_biggest);
	$request['image_type'] = $row['image_extension'];
	
	echo "Create images for Width {$width} Height {$height} Max {$d} Pow {$pow} Next {$next_biggest} <br />";
	$im->createImage($request);
	
}

