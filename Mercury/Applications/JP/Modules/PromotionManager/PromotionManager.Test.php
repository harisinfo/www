<?php
include_once( __APPLICATIONS_ROOT . '/' . __APPLICATION_DIR . '/' . __MODULE_DIR .'/PromotionManager/PromotionManager.class.php');

class TestPromotionManager extends UnitTestCase
{   
	function testInit()
    {  
        $promotion = new PromotionManager();  
        $request['search']['page'] = 'home';
        $response = $promotion->init($request);
        
        $this->assertIsA($response, 'array');
	}
	
	function testGetPromotion()
	{
		$promotion = new PromotionManager();  
        $response = $promotion->getPromotion();
        $this->assertIsA($response, 'array');
	}  
}