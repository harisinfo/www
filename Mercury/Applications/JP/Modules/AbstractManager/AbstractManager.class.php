<?php
/********************************************************
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk>		*
*														*
********************************************************/


class AbstractManager
{    
	
	public function __construct($module)
	{
		$this->module = $module;
	}
	
	
	public function init($request, $cmd = FALSE )
	{
		// enter your code here, define all methods as protected 
		echo "Hello World!!";
		return True;
		//return $this->showConditionManager($request);
	}
}