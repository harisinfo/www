<?php

class XMLManager extends DOMDocument
{	
	
	public function init($aXml, $cmd)
	{
		if( isset($aXml['xml_file'])===TRUE && isset($aXml['xml_schema'])===TRUE )
		{
			// do nothing
		}
		else
		{
			return FALSE;
		}
		
		switch($cmd)
		{
			case 'load':
				$this->loadXml($aXml['xml_file']);
			break;
			
			case 'validateSchema':
			default:
				$this->validateXML($aXml);
			break;
		}
	}
	
	public function validateXML($aXml)
	{
		$this->loadXml($aXml['xml_file']);
		return $xml->schemaValidate($aXml['xml_schema']);
	}
    	
}