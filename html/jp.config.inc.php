<?php
global $debug, $template_dir, $compile_dir, $config_dir, $cache_dir, $db;

$db['host'] = "localhost";
$db['user'] = "root";
$db['password'] = "";
$db['db_name'] = "jp";

$debug = true;
$template_dir = 'C:\\wamp\www\\html\\Themes\\V1.0\\';
$compile_dir = 'C:\\wamp\www\\Mercury\\templates_c\\';
$config_dir = 'C:\\wamp\www\\Mercury\\configs\\';
$cache_dir = 'C:\\wamp\www\\Mercury\\cache\\';

define( '__APPLICATION_DIR', 'JP');
define( '__PRODUCT_IMAGES_DIR', '//127.0.0.1/html/product_images/' );
define( '__PRODUCT_IMAGES_DIR_PATH', 'C:\\wamp\\www\\html\\product_images\\' );