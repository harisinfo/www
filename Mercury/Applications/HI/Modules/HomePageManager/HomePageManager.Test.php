<?php
include_once( __APPLICATIONS_ROOT . '/' . __APPLICATION_DIR . '/' . __MODULE_DIR .'/HomePageManager/HomePageManager.class.php');

class TestHomePageManager extends UnitTestCase
{   
	function testInit()
    {  
        $homepage = new HomePageManager();  
        $request['search']['page'] = 'home';
        $response = $homepage->init($request);
        
        $this->assertIsA($response, 'array');
        
        foreach($response as $page_var) 
        {  
            $this->assertIsA($page_var, 'array');  
            $this->assertIsA($page_var['page_id'], 'array');
        }  
	}
	
}