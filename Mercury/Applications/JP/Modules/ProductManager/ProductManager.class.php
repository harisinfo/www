<?php
/********************************************************
*	Class to perform Search  on Conditions and other 	*
*	advanced search capabilities						*
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk>		*
*														*
********************************************************/

//include_once('QuestionManager\\QuestionManager.class.php');

class ProductManager
{    

	public function __construct($module)
	{
		$this->module = $module;
	}
	
	public function init($request, $cmd = FALSE )
	{
		switch( $cmd )
		{
			default:
			return $this->showProductManager($request);
		}
	}
		
	
	private function showProductManager($request)
	{
		if(isset($request['search']['product_group'])===true && is_numeric($request['search']['product_group'])===true)
		{
				
		}
		else
		{
			
		}
		
		return $response;
	}
	
}