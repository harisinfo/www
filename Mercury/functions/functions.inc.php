<?php

function encrypt($string, $key) {
	
// when encrypting use TIMESTAMP___SITE_IDENTIFIER___$string, this will ensure no client side change of data

$string = time() . "___" . SITE_IDENTIFIER . "___" . $string;

$result = '';
for($i=0; $i<strlen($string); $i++) {
$char = substr($string, $i, 1);
$keychar = substr($key, ($i % strlen($key))-1, 1);
$char = chr(ord($char)+ord($keychar));
$result.=$char;
}

return base64_encode($result);
}

function decrypt($string, $key) {
$result = '';
$string = base64_decode($string);

for($i=0; $i<strlen($string); $i++) {
$char = substr($string, $i, 1);
$keychar = substr($key, ($i % strlen($key))-1, 1);
$char = chr(ord($char)-ord($keychar));
$result.=$char;
}

$result_array = explode("___",$result);

	if(empty($result_array) === TRUE)
	{
		return '';	
	}
	
	if( !isset($result_array[1])===TRUE)
	{
		return '';
	}
	
	
	if($result_array[1]!=SITE_IDENTIFIER)
	{
		return '';
	}
	else
	{
		return $result_array[2];
	}
} 


function cleanInput($request){

$request = trim($request);
$request = strip_tags($request);
$request = mysql_real_escape_string($request);
return $request;
}

function displayOutput($request){
$request = stripslashes($request);
return $request;
}

function formatUKPostcode($request){
	$request = trim($request);
	$request = str_replace(" ","",$request);
	$request = strrev($request);
	$arr_length = strlen($request);
	$postcode = "";

	for($i=0;$i < $arr_length;$i++){
		if($i==3){
			$postcode = $postcode." ".$request[$i];
		}else{
			$postcode = $postcode.$request[$i];
		}
	}
	
	$postcode = strrev($postcode);
	
	return $postcode;
	
}

function prepareVar_array($request){
	$response = array();
	if(is_array($request)){
	foreach($request as $key=>$value){
		$value = cleanInput($value);
		$response[$key] = $value;
	}
	}

return $response;
}

function formatDate($request){
    $date_arr = explode("-",$request);
    $response = $date_arr[2].'-'.$date_arr[1].'-'.$date_arr[0];
    return $response;
}

function dateDifference($request,$start_date=null){

        if($start_date==null){
            $now = date('Y-m-d 00:00:00', strtotime("now"));
            $now = strtotime($now);
        }else{
            // $request is end date if we do end_date - start_date
            $now = strtotime($start_date." 00:00:00");
        }
        
    $request = strtotime($request." 00:00:00");
    $diff =($request - $now)/(24*60*60);
    return $diff;
}

function getBrowserInfo() {
    

    $SUPERCLASS_NAMES = "gecko,mozilla,mosaic,webkit";
    $SUPERCLASS_REGX  = "(?:".str_replace(",", ")|(?:", $SUPERCLASS_NAMES).")";

    $SUBCLASS_NAMES   = "opera,msie,firefox,chrome,safari";
    $SUBCLASS_REGX    = "(?:".str_replace(",", ")|(?:", $SUBCLASS_NAMES).")";

    $browser      = "unrecognized";
    $majorVersion = "0";
    $minorVersion = "0";
    $fullVersion  = "0.0";
    $platform     = 'unrecognized';

    $userAgent    = strtolower($_SERVER['HTTP_USER_AGENT']);

    $found = preg_match("/(?P<browser>".$SUBCLASS_REGX.")(?:\D*)
(?P<majorVersion>\d*)(?P<minorVersion>(?:\.\d*)*)/i",
$userAgent, $matches);
    if (!$found) {
        $found = preg_match("/(?P<browser>".$SUPERCLASS_REGX.")(?:\D*)
(?P<majorVersion>\d*)(?P<minorVersion>(?:\.\d*)*)/i",
$userAgent, $matches);
    }

    if ($found) {
        $browser      = $matches["browser"];
        $majorVersion = $matches["majorVersion"];
        $minorVersion = $matches["minorVersion"];
        $fullVersion  = $matches["majorVersion"].$matches["minorVersion"];
        if ($browser == "safari") {
            if (preg_match("/version\
/(?P<majorVersion>\d*)(?P<minorVersion>(?:\.\d*)*)/i",
$userAgent, $matches)){
                $majorVersion = $matches["majorVersion"];
                $minorVersion = $matches["minorVersion"];
                $fullVersion  = $majorVersion.".".$minorVersion;
            }
        }
    }

    if (strpos($userAgent, 'linux')) {
        $platform = 'linux';
    }
    else if (strpos($userAgent, 'macintosh') || strpos($userAgent, 'mac platform x')) {
        $platform = 'mac';
    }
    else if (strpos($userAgent, 'windows') || strpos($userAgent, 'win32')) {
        $platform = 'windows';
    }

    return array(
        "browser"      => $browser,
        "majorVersion" => $majorVersion,
        "minorVersion" => $minorVersion,
        "fullVersion"  => $fullVersion,
        "platform"     => $platform,
        "userAgent"    => $userAgent);
}

function getRealIpAddr(){
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is passed from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}





function splitError($request){

	$request = trim($request);
	$response = array();
	$response['error'] = true;
	$response['error_msg'] = null;
	$request = $request." :";
	$errors = explode(":",$request);
	

	

	$response['server_response'] = trim($errors[0]);
	
	if(trim($errors[0])=='OK'){
		
		$response['error'] = false;	
	}else{
		$response['error'] = true;
		$response['error_msg'] = trim($errors[1]);
	}

	return $response;
}

function selectWords($request){
    $response = array();
    $response['extract'] = '';
    $request_array = explode(" ", $request);
    if(count($request_array)>27){
        for($i=0;$i<27;$i++){
            $response['extract'] = $response['extract'].$request_array[$i]." ";
            $response['words'] = 27;
        }
    }else{
        $response['extract'] = $request;
        $response['words'] = count($request_array) - 1;
    }
    
    return $response;
}

function dumpVariable($request){
    echo "<pre>";
    var_dump($request);
    echo "</pre>";
}

function sendMail($request, $email_variables){
	$boundary = uniqid('np');
	
 	$headers = "MIME-Version: 1.0\r\n";
 	$headers .= "From: {$email_variables['from_name']} <{$email_variables['from_email']}>\r\n";
 	$headers .= "Subject: {$email_variables['subject']}\r\n";
 	$headers .= "Content-Type: multipart/alternative;boundary=" . $boundary . "\r\n";
	$message = $email_variables['message_txt'];
 	$message .= "\r\n\r\n--" . $boundary . "\r\n";
 	$message .= "Content-type: text/plain;charset=utf-8\r\n\r\n";
 	$message .= "This is the text/plain version.";
 	$message .= "\r\n\r\n--" . $boundary . "\r\n";
 	$message .= "Content-type: text/html;charset=utf-8\r\n\r\n";
 	$message .= $email_variables['message_html'];
	$message .= "\r\n\r\n--" . $boundary . "--";
	
	$message = str_replace("%PASSWORD%", $request['user_password'], $message);
 	$response = mail($request['user_email'], $email_variables['subject'], $message, $headers);

 	return $response;
}

function db_die($message){
	die("SQL Failed " . $message . "<br />MySQL Error: " . mysql_errno());
}

function validate_ticket($ticket)
{
	$response = array();
	$response['result'] = false;
	$decrypt_ticket = explode("_",decrypt($ticket,KEYHASH));
	
	if( ($decrypt_ticket[1] == SITE_IDENTIFIER) && (count($decrypt_ticket) == 4) 
	&& (time()>$decrypt_ticket[2]) && (is_numeric($decrypt_ticket[3]) === true))
	{
		$response['result'] = true;
		$response['function_suffix'] = $decrypt_ticket[0];
		$response['condition_id'] = $decrypt_ticket[3];
	}
	
	return $response;
}

function die_with_header($error_code, $msg)
{
	header($_SERVER['SERVER_PROTOCOL'] . ' ' . "$error_code $msg", true, intval($error_code));
	die("<h1>$error_code $msg</h1>");
}

function create_dispatcher($request=NULL)
{
	$include_modules = strtolower(__APPLICATION_DIR) . ".modules.config.inc.php";
	if(!@include($include_modules)) die_with_header(404, "Page Not Found");
	
	global $registered_modules;
	
	if(isset($request)===TRUE)
	{
		if(isset($request['search']['module']) === true)
		{
			if(isset($registered_modules[$request['search']['module']]['name'])===true)
			{
				$class_name = $registered_modules[$request['search']['module']]['manager_name'];
				
				include_once( __APPLICATIONS_ROOT . "/" . __APPLICATION_DIR . "/" . __MODULE_DIR . "/{$class_name}/{$class_name}".$default_class_extension );
				
    				if (!class_exists($class_name, false)) 
    				{
        				die_with_header(500, "Internal Server Error");
    				}
    				
    				if(class_exists($class_name)===true)
					{
						$response['name'] = $registered_modules[$request['search']['module']]['name'];
						$response['class_name'] = $class_name;
						
						if(isset($registered_modules[$request['search']['module']]['requires_login'])===TRUE)
						{
							$response['requires_login'] = $registered_modules[$request['search']['module']]['requires_login'];
						}
						
						$response['manager_name'] = $registered_modules[$request['search']['module']]['manager_name'];
						$response['template'] = $registered_modules[$request['search']['module']]['template'];
						
						if(isset($registered_modules[$request['search']['module']]['template_variable'])===TRUE)
						{
							$response['template_variable'] = $registered_modules[$request['search']['module']]['template_variable'];
						}
						else
						{
							$response['template_variable'] = $default_template_variable;
						}
												
						return $response;
					}
			}
			else
			{
				die_with_header(500, "Internal Server Error");
			}
		}
		else
		{
			die_with_header(500, "Internal Server Error");
		}
	}
	else
	{
		
		
		// create default dispatcher for login
		$request['search']['module'] = 'login';
		$response['name'] = $registered_modules[$request['search']['module']]['name'];
		$response['class_name'] = $registered_modules['login']['manager_name'];
		$response['requires_login'] = $registered_modules[$request['search']['module']]['requires_login'];
		$response['template'] = $registered_modules[$request['search']['module']]['template'];
		$response['template_variable'] = $registered_modules[$request['search']['module']]['template_variable'];
		
		return $response;
	}
}


function inject_modules($module_name, $request, $cmd)
{
	global $registered_modules, $default_class_extension;
	
	$response = array();
	
	if(isset($registered_modules[$module_name]['attach_module'])===TRUE)
	{
		foreach( $registered_modules[$module_name]['attach_module'] as $key => $value )
		{
			$class_name = $registered_modules[$module_name]['attach_module'][$key];
			
			include_once( __APPLICATIONS_ROOT . "/" . __APPLICATION_DIR . "/" . __MODULE_DIR . "/{$class_name}/{$class_name}".$default_class_extension );
			
			if (!class_exists($class_name, false)) 
    		{
        				die_with_header(400, "Injection Failed for {$key} could not include " . 
        								__APPLICATIONS_ROOT . "/" . __APPLICATION_DIR . "/" . __MODULE_DIR . 
        								"/{$class_name}/{$class_name}".$default_class_extension);
        				
    		}
    				
    		if(class_exists($class_name)===true)
			{
				$module = new $class_name;
				$t_response = $module->init($request, $cmd);
				
				if($t_response!==FALSE)
				{
					$response = array_merge($response,$t_response);
				}
			}
		}
	}
	
	return $response;
}