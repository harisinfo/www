<?php

include_once( __CORE_DIR . '/DBManager/dbManager.class.php');

class SessionManager extends dbManager
{	
	
	public function __construct()
	{
		
	}
	
	protected function addSessionEncrypted($key,$value)
	{
		//$_SESSION[encrypt($key,KEYHASH)] = encrypt($value,KEYHASH);
		if($key=='user_id')
		{
			$_SESSION[encrypt('c_user_id',KEYHASH)] = crypt($value);
			$_SESSION[encrypt($key,KEYHASH)] = encrypt($value, KEYHASH);
		}
		else
		{
			$_SESSION[encrypt($key,KEYHASH)] = encrypt($value,KEYHASH);
		}
		
		return TRUE;
	}
	
    protected function addSessionArray($request, $encrypt=TRUE)
    {
		foreach($request as $key => $value)
		{
			if($encrypt === TRUE )
			{
				$this->addSessionEncrypted($key,$value);
			}
			else
			{
            	$_SESSION[$key] = $value;
			}
        }
        
        return TRUE;
	}
	
    protected function removeSessionArray($request)
	{
		foreach($request as $key => $value)
		{
			unset($_SESSION[$key]);
        }
        
        return TRUE;
	}
	
	protected function readEncrypedSessionData($request)
	{
		// session is 1, 2 or 3 dimensions
		if(decrypt($request, KEYHASH) != '')
		{
			return TRUE;	
		}
		
		return FALSE;
	}
	
	
	private function validateSessionKeys($request)
	{
		
	}
	
	private function validateSessionData($request)
	{
		
	}
	
}
