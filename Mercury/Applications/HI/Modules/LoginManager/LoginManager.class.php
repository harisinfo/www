<?php

include_once( __CORE_DIR . '/FormManager/FormManager.class.php');

class LoginManager extends FormManager
{
	
	protected $module_name = 'login';
	
	public function init($request, $cmd=NULL)
	{
		switch($cmd)
    	{
    		case 'checkloginstatus':
    			return $this->checkLoginStatus();
    		break;
    		
    		case 'login': 
        	return $this->doLogin($request);        
        	break;
        	
        	case 'logout':
        	return $this->doLogout();
        	break;
        	
    		default:
        	return $this->showLoginPage($request);
        	break;
		}
	}
	
	
	public function showLoginPage($request)
    {
		if(isset($request['search']['user_name'])===TRUE&&isset($request['search']['password'])===TRUE
			&&trim($request['search']['user_name'])!=''&&trim($request['search']['password'])!='')
		{
			return $this->doLogin($request);
		}
		else
		{
			$login_response = $this->checkIfLoggedIn($request);
			
			if(isset($login_response['login'])===TRUE&&$login_response['login']==1
			&&isset($login_response['user_id'])===TRUE&&is_numeric($login_response['user_id'])===TRUE)
			{
				return $login_response;
			}
			else
			{
				$login_response['login']['show'] = TRUE;
				return $login_response;
			}
		}
		
    }
	
	
    private function doLogin($request)
    {
    	global $connection;
    	
    	$this->doLogout();
    	
		$response = array();
		$response['login'] = 'failed';
    	$response['exist'] = false;
    
		$sql = "SELECT u.user_id, u.user_name FROM user u WHERE u.user_name LIKE '" .
        		$request['search']['user_name']."' AND u.password LIKE '".$request['search']['password']."' ";
		$result = $connection->query($sql);
		$n = $result->num_rows;
    	
		if($n==1)
		{
			while($row=$result->fetch_array(MYSQLI_ASSOC))
			{
						echo $row['user_id'];
                        $response[encrypt('user_id',KEYHASH)] = encrypt($row['user_id'],KEYHASH);
                        SessionManager::addSessionEncrypted('user_id',$row['user_id']);
                        
                        $response[encrypt('login',KEYHASH)] = encrypt(1,KEYHASH);
                        SessionManager::addSessionEncrypted('login',1);
                        
                        // ToDo: Save salt last password modified date
                        
						$response['login'] = 1;
                        $response['exist'] = true;
			}
		}
		
		return $response;
    }

    private function doLogout()
    {
        foreach($_SESSION as $key => $value)
        {
            unset($_SESSION[$key]);
        }
    }

    public function checkIfLoggedIn($request)
    {
        $response = array();
        
        //dumpVariable($request['session']);
        
        foreach($request['session'] as $key => $value)
        {
        	//echo $key . " " . $value . "<br />";
        	
        	//echo decrypt($key, KEYHASH) . " " . decrypt($value, KEYHASH) . "<br />";
        	
        	switch(decrypt($key, KEYHASH))
        	{
				case 'login':
					$response[decrypt($key, KEYHASH)] = decrypt($value, KEYHASH);
				break;
				
				case 'ticket':
					$response[$key] = $value;
				break;
				
				case 'user_id':
					$response[decrypt($key, KEYHASH)] = decrypt($value, KEYHASH);
				break;
				
				case 'c_user_id':
					$response[decrypt($key, KEYHASH)] = $value;
				break;
				
				default:
					// do nothing
					$response['crypt_user_id'] = $value;
				break;
        	}
        	
        }
        
        
        if($response['user_id'] == $response['c_user_id'])
        {
			//echo "Login";
        }
        else
        {
			//echo "Data tampered";
        }
        
        return $response;
    }
    
    
    private function checkUser($request)
    {
    	$response = array();
    	$response['login'] = 0;
    	$response['exist'] = false;
    
    	$sql = "SELECT u.user_id, u.user_type FROM user u 
    			WHERE 
    			u.user_name LIKE '" .$request['search']['user_name']."' 
    			AND u.state = 1";
        	    
    	$esql = mysql_query($sql) or db_die($sql);
    	$n = mysql_num_rows($esql);
    
    	if($n==1)
    	{
        	while($row=mysql_fetch_array($esql))
        	{
            	$response['user_id'] = encrypt($row['user_id'],KEYHASH);
            	$response['user_type'] = encrypt($row['user_type'],KEYHASH);
            	$response['login'] = 'success';
            	$response['exist'] = true;
        	}
    	}

    	return $response;
    }    
    

}
