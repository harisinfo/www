<?php
global $default_template_variable, $registered_modules, $default_class_suffix, $default_class_extension;

// used by dispatcher
$default_template_variable = 'response';
$default_class_suffix = "Manager";
$default_class_extension = ".class.php";

// home page
$registered_modules['home']['name'] = 'home';
$registered_modules['home']['manager_name'] = 'HomePageManager';
$registered_modules['home']['attach_module']['ContentManager'] = 'ContentManager';
$registered_modules['home']['attach_module']['PromotionManager'] = 'PromotionManager';
$registered_modules['home']['template'] = 'home.tpl';

// content
$registered_modules['content']['name'] = 'content';
$registered_modules['content']['manager_name'] = 'ContentManager';
$registered_modules['content']['template'] = 'home.tpl';

// promotion
$registered_modules['promotion']['name'] = 'promotion';
$registered_modules['promotion']['manager_name'] = 'PromotionManager';
$registered_modules['promotion']['template'] = 'home.tpl';