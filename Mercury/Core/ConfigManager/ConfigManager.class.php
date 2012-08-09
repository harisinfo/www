<?php

include_once( __CORE_DIR . '\\XMLManager\\XMLManager.class.php');

class ConfigManager extends XMLManager
{	
	protected $xml= '';
	protected $xml_FP = '';
	protected $xml_schema_FP = '';
	
	public $xml_config_file;
	public $xml_schema_file;
	public $xml_config_file_FP;
	public $xml_schema_file_FP;
	
	public $aXml = array();
	
	public function init($file,$cmd)
	{
		// XML file name
		$this->xml = $file; 
		
		// location of XML File
		$this->xml_FP = __APPLICATIONS_ROOT . "\\" . __APPLICATION_DIR . "\\" . __MODULE_XML_DIR . "\\" . __XML_FORMS_DIR . "\\" .$file; 
		
		// Generated config file name
		$this->xml_config_file = str_replace(".xml",".php",$file); 
		
		// absolute path for configuration file
		$this->xml_config_file_FP = __APPLICATIONS_ROOT . "\\" . __APPLICATION_DIR . "\\" . __MODULE_XML_DIR . "\\" . 
									__XML_CACHE_DIR . "\\" .$this->xml_config_file;
		
		// location of schema file name
		$this->xml_schema_file = str_replace(".xml",".xsd",$file); 
		
		// absolute path for schema file
		$this->xml_schema_FP = __APPLICATIONS_ROOT . "\\" . __APPLICATION_DIR . "\\" . __MODULE_XML_DIR . "\\" . __XML_FORMS_DIR . "\\" . 
								$this->xml_schema_file;

		$this->aXml = array( 'xml_schema' => $this->xml_schema_FP, 'xml_file' => $this->xml_FP );
		
		switch($cmd)
		{
			case 'load':
				$this->loadConfiguration();
				break;
				
			default:
				$this->buildConfigFromXML();
				break;
		}
	}
	
	
	public function validateXML()
	{
		$r = Parent::init($this->aXml,'validateSchema');
		var_dump($r);
	}
	
	protected function loadConfiguration()
	{
		if(file_exists($this->xml_config_file_FP)===TRUE)
		{
			include_once($this->xml_config_file_FP);
		}
		else
		{
			// build XML config
			$this->buildConfigVariable();
		}
	}
	
	protected function buildConfigVariable()
	{
		if(file_exists($this->xml_FP)===TRUE)
		{
			
		}
	}
	
	private function createXMLVariable($file)
	{
		// do something
	}
	
	private function writeXMLVariable($file)
	{
		
	}
	
	private function readXMLVariable($file)
	{
		
	}
    	
}
