<?php
class CategoryManager {
    
    
    function getCategory($request){
		$response = array();
		$response['login'] = 'failed';
    	$response['exist'] = false;
    
		$sql = "SELECT u.user_id, u.saloon_id, u.user_email, u.user_type, u.first_name, u.last_name FROM user u WHERE u.user_email LIKE '" .
        	        $request['search']['user_email']."' AND u.user_password LIKE '".$request['search']['password']."' " .
            	    "AND user_state = 1 " . 
                	"AND u.user_type = '".$request['search']['user_type']."'";
        
		$esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
		$n = mysql_num_rows($esql);
    
		if($n==1){
			while($row=mysql_fetch_array($esql)){
                        $response[encrypt('user_id',KEYHASH)] = encrypt($row['user_id'],KEYHASH);
                        $_SESSION[encrypt('user_id',KEYHASH)] = encrypt($row['user_id'],KEYHASH);

                        $response[encrypt('saloon_id',KEYHASH)] = encrypt($row['saloon_id'],KEYHASH);
                        $_SESSION[encrypt('saloon_id',KEYHASH)] = encrypt($row['saloon_id'],KEYHASH);

						$response[encrypt('user_type',KEYHASH)] = encrypt($row['user_type'],KEYHASH);
                        $_SESSION[encrypt('user_type',KEYHASH)] = encrypt($row['user_type'],KEYHASH);

                        $response[encrypt('user_email',KEYHASH)] = encrypt($row['user_email'],KEYHASH);
                        $_SESSION[encrypt('user_email',KEYHASH)] = encrypt($row['user_email'],KEYHASH);

                        $response[encrypt('first_name',KEYHASH)] = encrypt($row['first_name'],KEYHASH);
                        $_SESSION[encrypt('first_name',KEYHASH)] = encrypt($row['first_name'],KEYHASH);

                        $response[encrypt('last_name',KEYHASH)] = encrypt($row['last_name'],KEYHASH);
                        $_SESSION[encrypt('last_name',KEYHASH)] = encrypt($row['last_name'],KEYHASH);

                        $response[encrypt('login',KEYHASH)] = encrypt('success',KEYHASH);
                        $_SESSION[encrypt('login',KEYHASH)] = encrypt('success',KEYHASH);

                        $response['user_type'] = $row['user_type'];
						$response['login'] = 'success';
                        $response['exist'] = true;
			}
		}

		return $response;
    }

    function logout(){
        foreach($_SESSION as $key => $value){
            unset($_SESSION[$key]);
        }
    }

    function checkIfLoggedIn($request){
        $response = array();
        
        foreach($request['session'] as $key => $value){
            $response[decrypt($key, KEYHASH)] = decrypt($value, KEYHASH);
        }

        return $response;
    }
    
    function checkUser($request){
    	$response = array();
    	$response['login'] = 'failed';
    	$response['exist'] = false;
    
    	$sql = "SELECT u.user_id, u.user_type FROM user u WHERE u.user_email LIKE '" .
        	    $request['search']['user_email']."' ".
            	"AND u.user_type = '".$request['search']['user_type']."'";
    	$esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
    	$n = mysql_num_rows($esql);
    
    	if($n==1){
        	while($row=mysql_fetch_array($esql)){
            	$response['user_id'] = encrypt($row['user_id'],KEYHASH);
            	$response['user_type'] = encrypt($row['user_type'],KEYHASH);
            	$response['login'] = 'success';
            	$response['exist'] = true;
        	}
    	}

    	return $response;
    }
    
    
    function registerSaloon($request){
        $response = array();
        $response['register_error'] = true;
        $date = date('Y-m-d H:i:s',"Now");
        $request['search']['saloon_type'] = 'NORMAL';

        $sql = "INSERT INTO `saloon` (saloon_join_date,saloon_type,address_line_1,address_line_2,city,state,postcode,telephone) VALUES " .
                " ('".$date."', '".$request['search']['saloon_type']."', '".$request['search']['address_line_1']."', '".$request['search']['address_line_2']."','".$request['search']['city']."','".$request['search']['state']."','".$request['search']['postcode']."','".$request['search']['telephone']."') ";
		$esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());

        $saloon_id = mysql_insert_id();

        $sql = "INSERT INTO `user` (join_date,saloon_id,user_type,user_state,user_email,user_password,first_name) VALUES " .
                " ('".$date."', '".$saloon_id."','".$request['search']['user_type']."', '1', '".$request['search']['user_email']."','".$request['search']['password']."','".$request['search']['saloon_name']."') ";
        $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());

        $response['register_error'] = false;

        return $response;
    }
    
    
    function registerUser($request){
        $response = array();
        $response['register_error'] = true;
        $date = date('Y-m-d H:i:s',"Now");

        $sql = "INSERT INTO `user` (join_date,user_type,user_state,user_email,user_password,first_name,last_name,gender,year_of_birth) VALUES " .
                " ('".$date."', '".$request['search']['user_type']."', '1', '".$request['search']['user_email']."','".$request['search']['password']."','".$request['search']['first_name']."', '".$request['search']['last_name']."','".$request['search']['gender']."','".$request['search']['year_of_birth']."') ";
                
        $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
                
        $response['register_error'] = false;
            
        return $response;
    }

    function register($request, $login_request=NULL){
        global $user_required_fields, $employee_required_fields, $saloon_required_fields, $def_password;

        $response['register'] = 'true';
        $response['registered'] = 'false';
        $variable_to_check = array();

        if($request['search']['user_type']=='USER'){
            $variable_to_check = $user_required_fields;
        }elseif($request['search']['user_type']=='EMPLOYEE'){
			$variable_to_check = $employee_required_fields;
        }else{
            $variable_to_check = $saloon_required_fields;
        }
        
        
        foreach($variable_to_check as $key => $value){
            if($request['search'][$value]==''){
                $response['required_field'][$value] = 'required';
                $response['register'] = 'false';
            }
        }

        if($request['search']['user_type']=='USER'){
        
        	if($request['search']['password']!=$request['search']['rpassword']){
            	    $response['required_field']['password'] = 'mismatch';
                	$response['required_field']['rpassword'] = '';
                	$response['register'] = 'false';
        	}

        	if(strlen($request['search']['password'])<$def_password['min_length']||
           		strlen($request['search']['password'])>$def_password['max_length']){
                	$response['required_field']['password'] = 'password_length';
                	$response['register'] = 'false';
        	}

        	if (ctype_alnum($request['search']['password'])){
	            //
    	    }else{
        	    $response['required_field']['password'] = 'validation';
            	$response['register'] = 'false';
        	}

        	$check_user = $this->checkUser($request);
        

        	if($check_user['exist']==true){
            	$response['required_field']['user_email'] = 'exists';
            	$response['register'] = 'false';
        	}
		}
        
       

        if($response['register']=='true'){

            if($request['search']['user_type']=='USER'){
                $this->registerUser($request);
                $response['registered'] = 'true';
            }

            if($request['search']['user_type']=='SALOON'){
                $this->registerSaloon($request);
                $response['registered'] = 'true';
            }
            
            if($request['search']['user_type']=='EMPLOYEE'){
                $this->registerEmployee($request,$login_request);
                $response['registered'] = 'true';
            }

        }

        return $response;
    }

    function updateSaloonMisc($request,$login){

        $response['register'] = 'true';
        $response['registered'] = 'false';

        $field_name = $request['search']['update'];
        
        if($field_name!='special_offer'){
        	$field_value = $request['search'][$field_name];
        	$sql = "UPDATE saloon SET {$field_name} = '{$field_value}' WHERE saloon_id = {$login['saloon_id']}";
			$esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
			$response['registered'] = 'true';
		}else{
			include_once('UserManager/UserManager.class.php');
    		$user_manager = new UserManager();
    		$request['search']['upload_type'] = 'special_offer';
    		$response['registered'] = $user_manager->uploadImage($login,$_FILES,$request);
		}
       
        return $response;
    }

    function updateSaloon($request,$login){
        global $saloon_required_fields, $def_password;

        $response['register'] = 'true';
        $response['registered'] = 'false';
        $variable_to_check = array();
        $variable_to_check = $saloon_required_fields;
        
        foreach($variable_to_check as $key => $value){
            if($key!='user_email'){
                if($request['search'][$value]==''){
                    $response['required_field'][$value] = 'required';
                    $response['register'] = 'false';
                }
            }
        }

        if($request['search']['password']!=$request['search']['rpassword']){
                $response['required_field']['password'] = 'mismatch';
                $response['required_field']['rpassword'] = '';
                $response['register'] = 'false';
        }

        if(strlen($request['search']['password'])<$def_password['min_length']||
           strlen($request['search']['password'])>$def_password['max_length']){
                $response['required_field']['password'] = 'password_length';
                $response['register'] = 'false';
        }

        if (ctype_alnum($request['search']['password'])){
            //
        }else{
            $response['required_field']['password'] = 'validation';
            $response['register'] = 'false';
        }



        if($response['register']=='true'){

            if($login['user_type']=='SALOON'){
                $sql = "UPDATE saloon SET address_line_1 = '{$request['search']['address_line_1']}',
                        address_line_2 = '{$request['search']['address_line_2']}', city = '{$request['search']['city']}',
                        state = '{$request['search']['state']}',postcode = '{$request['search']['postcode']}',
                        telephone = '{$request['search']['telephone']}' WHERE saloon_id = {$login['saloon_id']}";

                $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
                

                $sql = "UPDATE user SET first_name = '{$request['search']['saloon_name']}', user_password = '{$request['search']['password']}'
                        WHERE saloon_id = {$login['saloon_id']} AND user_type = 'SALOON'";

                $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());

                $response['registered'] = 'true';
            }

        }

        return $response;
    }
    
    
    function registerEmployee($request,$login){
    	
				$insql = "INSERT INTO user (saloon_id, join_date, user_type, first_name, last_name, user_designation) 
							VALUES ('{$login['saloon_id']}','{$now}','EMPLOYEE', '{$request['search']['first_name']}', '{$request['search']['last_name']}', '{$request['search']['designation']}')";
				$esql = mysql_query($insql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());		
				
				$user_id = mysql_insert_id();
				
				$insql = "INSERT INTO saloon_employee (saloon_id, user_id) VALUES ('{$login['saloon_id']}','{$user_id}')";
				$esql = mysql_query($insql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());		
    }
    
    function removeEmployee($request,$login){
    	
    	if(isset($request['search']['user_id'])&&$request['search']['user_id']!=''&&isset($login['saloon_id'])&&$login['saloon_id']!=''){
    		
    		$deletesql = "DELETE FROM `user` WHERE user_id = " . intval($request['search']['user_id']) . " AND user_type = 'EMPLOYEE'";
    		mysql_query($deletesql) or die("MySQL Error: $deletesql<br />MySQL Error No: ".mysql_error());
    		
    		$deletesql = "DELETE FROM `saloon_employee` WHERE user_id = " . intval($request['search']['user_id']) . 
    					" AND saloon_id = " . intval($login['saloon_id']);
    		mysql_query($deletesql) or die("MySQL Error: $deletesql<br />MySQL Error No: ".mysql_error());
    		
    		return 'success';
    	}
    	else{
			return 'fail';
    	}
		
    }
    
    function createDOB(){
    	$response = array();
		
		$now_year = date('Y',strtotime("Now"));
		
			for($i=0;$i<=DOB_YEAR_INTERVAL;$i++){
				$response[$i] = $now_year - $i;
			}
			
		return $response;			
    }
    
    
    function forgotPassword($request){
		global $forgot_password;
		$user_details = array();
		$user_details = $this->getUserDetails($request);
		
		if($user_details['result']===TRUE){
			// if last request date is < NOW - LOCK_TRIES_SECONDS reset the account
			
			/*if($user_details['no_attempts']==0){
				$this->updatePasswordDate($user_details['user_id']);
			}*/
			
			/*if($user_details['no_attempts']>0&&$user_details['no_attempts']<ALLOW_ATTEMPTS){
				// update counter here
				$upsql = "UPDATE `user` SET no_attempts = no_attempts + 1 WHERE user_id = {$user_details['user_id']}";
    			$eupsql = mysql_query($upsql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
			}*/
			
			/*if($user_details['no_attempts']<ALLOW_ATTEMPTS){*/
				sendMail($user_details, $forgot_password);
				$response = 'success';
			/*}else{
				$response = 'too_many_attempts';
			}*/
			
		}else{
			$response = 'failure';
		}
		
		return $response;
    }
    
    function getUserDetails($request){
    	$response = array();
    	$response['result'] = FALSE;
		$sql = "SELECT * FROM `user` WHERE user_email = '{$request['search']['user_email']}' 
				AND user_type = '{$request['search']['user_type']}'";
				
		$esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
		$n = mysql_num_rows($esql);
    
		if($n==1){
			while($row=mysql_fetch_array($esql)){
				$response['result'] = TRUE;
				$response['user_id']	= $row['user_id'];
				$response['user_email']	= $row['user_email'];
				$response['user_password']	= $row['user_password'];
				$response['user_type']	= $row['user_type'];
				$response['gender']	= $row['gender'];
				$response['no_attempts']	= $row['no_attempts'];
			}
		}
				
		return $response;
    }
    
    function updatePasswordDate($request){
    	$sql = "UPDATE `user` SET password_date = NOW(), no_attempts = 1 WHERE user_id = {$user_id}";
    	$esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
    }

}
?>