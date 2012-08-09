<?php
$debug = true;
$template_dir = 'C:\\wamp\\www\\html\\';
$compile_dir = 'C:\\wamp\\www\\Mercury\\templates_c\\';
$config_dir = 'C:\\wamp\\www\\Mercury\\configs\\';
$cache_dir = 'C:\\wamp\\www\\Mercury\\cache\\';

define('DEFAULT_LANGUAGE' , 'en');
define('DEFAULT_CITY', 'London');
define('NO_OF_RECORDS', '3');
define('NO_OF_RESULTS_SALOONS','5');
define('NO_OF_RESULTS_HS','15');
define('NO_OF_RESULTS_TOP_HS','10');
define('IMAGE_WIDTH','110');
/*define('IMAGE_HEIGHT','266');*/

$allowed_files = array('jpg', 'jpeg', 'png', 'gif');

$uploaded_images_dir = '/home/likemyha/public_html/user_images/';
$max_saloon_images = 5;

$disallowed_list = array("'", '=', '%', '|','{','}','-','_','$');

$user_required_fields = array('user_email','password','rpassword','first_name','last_name');

$saloon_required_fields = array('user_email','password','rpassword','saloon_name','address_line_1','city','state','postcode','telephone');

$employee_required_fields = array('first_name','last_name');

$def_password = array('min_length' => 6, 'max_length' => 12, 'type' => 'alphanumeric_@-');

$express_register = 1;

$rating_messages = array(1 => 'ehh...', 2 => 'Not Bad', 3 => 'Pretty Good', 4 => 'Out Standing', 5 => 'Freakin Awesome');

?>