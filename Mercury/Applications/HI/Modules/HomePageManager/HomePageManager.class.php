<?php
/********************************************************
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk> 	*
*														*
********************************************************/

class HomePageManager
{   
	protected static $module_name = 'home';

	public static function init($request, $cmd = FALSE )
	{
		global $registered_modules;
		
		$response = array();
		$inject_response = inject_modules(self::$module_name, $request, $cmd);
		
		if($inject_response!==FALSE)
		{
			$response = array_merge($inject_response, $response);
		}
		
		return $response;
	}
}