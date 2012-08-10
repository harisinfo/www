<?php
/********************************************************
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk>		*
*														*
********************************************************/

include_once( __APPLICATIONS_ROOT . '\\' . __APPLICATION_DIR . '\\' . __MODULE_DIR .'\\ProductManager\\ProductManager.class.php');

class HomePageManager extends ProductManager
{   
	private $module_name = 'home';

	public function init($request, $cmd = FALSE )
	{
		global $registered_modules;
		
		$response = array();
		$product_result = ProductManager::init($request);
		$response = $product_result;
		
		$inject_response = inject_modules($this->module_name, $request, $cmd);
		
		if($inject_response!==FALSE)
		{
			$response = array_merge($inject_response, $response);
		}
		
		return $response;
	}
}