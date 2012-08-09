<?php
class DispatchManager {
    
    function __construct($request)
    {
		include_once("modules.config.inc.php");  
    	
    	if(isset($request['search']['module']) === true)
		{
				
			if(isset($registered_modules[$request['search']['module']]['name'])===true)
			{
				$this->class_name = ucfirst(strtolower($request['search']['module'])).$default_class_suffix;
				include_once("$this->class_name\\$this->class_name".$default_class_extension);
				
    				if (!class_exists($this->class_name, false)) 
    				{
        				die_with_header(500, "Bad Request no class by this name");
    				}
			}
			else
			{
				die_with_header(500, "Bad Request not defined");
			}
		}
		else
		{
			die_with_header(500, "Bad Request no module");
		}
    	
		
    }
    
    
    function loadClass()
    {
		if(class_exists($this->class_name)===true)
		{
			$obj = new $this->class_name();
			return $obj;
		}
		
    }
        
}
