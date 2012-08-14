<?php
global $default_template_variable, $registered_modules, $default_class_suffix, $default_class_extension;

// used by dispatcher

$default_template_variable = 'response';
$default_class_suffix = "Manager";
$default_class_extension = ".class.php";

/**
* Available variables
* Required
* -------------------
* name
* manager_name
* template_variable
* template
* Note: unless specified, all forms use parent::saveForm
* 
* Optional
* -------------------
* requires_history
* history_module
* history_key_1
* history_key_2
* requires_login
*
* 
* Advanced Optional
* -------------------
* 
* load_ajax_support
* attach_module
* attached_module_variable
* inject_class
* inject_dependency
* inject_support
* inject_social_media_plugins
* (see available options in social media)
* allow_blog
* 	blog_template
* 	allow_adding_comments
* 	add_blind
*/



// home page

$registered_modules['home']['name'] = 'home';
$registered_modules['home']['manager_name'] = 'HomePageManager';
$registered_modules['home']['attach_module']['CategoryManager'] = 'CategoryManager';
//$registered_modules['home']['attach_module']['LoginManager'] = 'LoginManager';
//$registered_modules['home']['attach_module']['RegisterManager'] = 'RegisterManager';
//$registered_modules['home']['attach_module']['PageManager'] = 'PageManager'; //Loaded on every page by default
//$registered_modules['home']['template_variable'] = 'index_response';
$registered_modules['home']['attached_module_variable'] = 'attached_module_variable';
$registered_modules['home']['load_ajax_support'] = true;
$registered_modules['home']['template'] = 'home.tpl';

// products

$registered_modules['product']['name'] = 'product';
$registered_modules['product']['manager_name'] = 'ProductManager';
$registered_modules['home']['attach_module']['CategoryManager'] = 'CategoryManager';
//$registered_modules['home']['attach_module']['LoginManager'] = 'LoginManager';
$registered_modules['product']['template'] = 'home.tpl';

// content

$registered_modules['content']['name'] = 'content';
$registered_modules['content']['manager_name'] = 'ContentManager';
//$registered_modules['content']['template_variable'] = 'product_response';
$registered_modules['content']['template'] = 'index.tpl';

// login

$registered_modules['login']['name'] = 'login';
$registered_modules['login']['manager_name'] = 'LoginManager';
$registered_modules['login']['requires_history'] = true;
$registered_modules['login']['history_module'] = 'login';
$registered_modules['login']['history_key_1'] = 'user_id';
$registered_modules['login']['history_key_2'] = 'IP';
$registered_modules['login']['requires_login'] = false;
//$registered_modules['login']['template_variable'] = 'login';
$registered_modules['login']['template'] = 'login.tpl';

// register_condition

$registered_modules['condition']['name'] = 'condition';
$registered_modules['condition']['manager_name'] = 'ConditionManager';
$registered_modules['condition']['requires_history'] = true;
$registered_modules['condition']['history_module'] = 'user_condition';
$registered_modules['condition']['history_key_1'] = 'user_id';
$registered_modules['condition']['history_key_2'] = 'condition_id';
$registered_modules['condition']['requires_login'] = false;
$registered_modules['condition']['template_variable'] = 'condition_related_questions';
$registered_modules['condition']['template'] = 'register_condition.tpl';


// registration

$registered_modules['register']['name'] = 'register';
$registered_modules['register']['manager_name'] = 'RegisterManager';
$registered_modules['register']['requires_history'] = true;
$registered_modules['register']['history_module'] = 'register';
$registered_modules['register']['history_key_1'] = 'user_id';
//$registered_modules['register']['template_variable'] = 'register_questions';
$registered_modules['register']['template'] = 'register_user.tpl';


// category

$registered_modules['category']['name'] = 'category';
$registered_modules['category']['manager_name'] = 'CategoryManager';