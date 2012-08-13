<?php
/********************************************************
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk>		*
********************************************************/

class URLManager
{    
	protected function init($request)
	{
		$search = array("&amp;", "_", " ","(",")");
		$request = strip_tags(strtolower(str_replace($search,"-",trim($request))));
		$request = str_replace("--","-",$request);
		return $request;
	}
}