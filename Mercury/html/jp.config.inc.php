<?php
$debug = true;
$template_dir = 'C:\\wamp\www\\html\\templates\\';
$compile_dir = 'C:\\wamp\www\\Mercury\\templates_c\\';
$config_dir = 'C:\\wamp\www\\Mercury\\configs\\';
$cache_dir = 'C:\\wamp\www\\Mercury\\cache\\';

// constants for the site

define('SITE_IDENTIFIER', 'JP');

define('DEFAULT_LANGUAGE' , 'en-UK');
define('DEFAULT_LABEL' , 'en_UK');

// gender

define('GENDER_MALE', 0);
define('GENDER_FEMALE', 1);
define('GENDER_NONE', 2);

// authorisation levels

define('USER' , '0');
define('ADMIN' , '1');
define('MEDIC' , '2');
define('SUPER' , '3');

// get steps

define('STEP_1','Condition');
define('STEP_2','GeneralMedical');
define('STEP_3','Register');

// constant for authorisation of conditions / registration

define('NEW_CONSULTATION' , '0'); // New customer
define('NEW_CONDITION' , '1'); // Existing customer with new condition registration
define('NEW_TREATMENT' , '2'); // New treatment by customer

define('ADMIN_CONFIRMED' , '3'); // Admin has confirmed the customer
define('MEDIC_CONFIRMED' , '4'); // Medic has confirmed the customer
define('CONFIRMED', '5'); // Customer has been confirmed and is ready to order

define('ADMIN_NEED_MORE_INFO' , '5'); // Admin has requested more information
define('MEDIC_NEED_MORE_INFO' , '6'); // Medic needs more information

define('CUSTOMER_HAS_PROVIDED_MORE_INFO_ADMIN' , '7'); // Customer has provided more info to the admin
define('CUSTOMER_HAS_PROVIDED_MORE_INFO_MEDIC' , '8'); // Customer has provided more info to the medic


// constants for authorisation of orders

define('NEW_ORDER' , '0'); // New customer
define('ORDER_ADMIN_CONFIRMED' , '2'); // Existing customer with new condition registration
define('ORDER_MEDIC_CONFIRMED' , '3'); // New treatment by customer

define('ORDER_CONFIRMED', '4'); // Customer has been confirmed and is ready to order

define('ADMIN_NEED_MORE_INFO_REGARDING_ORDER' , '5'); // Admin has requested more information
define('MEDIC_NEED_MORE_INFO_REGARDING_ORDER' , '6'); // Medic needs more information

define('CUSTOMER_HAS_PROVIDED_MORE_INFO_ADMIN_ORDER' , '7'); // Customer has provided more info to the admin
define('CUSTOMER_HAS_PROVIDED_MORE_INFO_MEDIC_ORDER' , '8'); // Customer has provided more info to the medic


// constants for questions

define('MEDICAL_CONDITION_QUESTION_GENERAL' , '0');
define('MEDICAL_CONDITION_QUESTION_SPECIFIC' , '1');


// error messages

define('ANSWER_SELECTION_REQUIRED', 'Please select one option');
define('MORE_INFO_REQUIRED_YES_SOMETIMES', 'Please provide more details');




$medical_condition_label_table = "medical_condition_label";
$treatment_label_table = "treatment_label";

$question_field = "question_text";

$allowed_files = array('jpg', 'jpeg', 'png', 'PNG', 'gif', 'pdf', 'doc', 'docx', 'rtf', 'txt', 'xlsx', 'xls', 'PDF');
$uploaded_images_dir = '/home/likemyha/public_html/user_images/';
$max_saloon_images = 5;

$disallowed_list = array("'", '=', '%', '|','{','}','-','_','$');

$user_required_fields = array('user_email','password','rpassword','gender','year_of_birth');
$saloon_required_fields = array('user_email','password','rpassword','saloon_name','address_line_1','city','state','postcode','telephone');
$employee_required_fields = array('first_name','last_name');

$def_password = array('min_length' => 6, 'max_length' => 12, 'type' => 'alphanumeric_@-');

$express_register = 1;
$rating_messages = array(1 => 'ehh...', 2 => 'Not Bad', 3 => 'Pretty Good', 4 => 'Out Standing', 5 => 'Freakin Awesome');

$forgot_password = array(
							'subject' => 'Your account details', 
							'from_email' => 'donotreply@likemyhair.co,uk', 
							'from_name' => 'Admin', 
							'message_txt' => 'Your password is: %PASSWORD%',
							'message_html' => 'Your password is: <strong>%PASSWORD%</strong>'
					);

$subject_advises = array('1' => 'Subject 1', '2' => 'Subject 2', '3' => 'Subject 3');
$post_required_fields = array('post_subject','post_heading','post_message');
