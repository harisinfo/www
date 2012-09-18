<?php
/********************************************************
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk> 	*
*														*
********************************************************/

class ContentManager
{   
	protected static $module_name = 'content';

	public static function init($request, $cmd = FALSE )
	{
		global $registered_modules;
		
		$response = array();
		$inject_response = inject_modules(self::$module_name, $request, $cmd);
		
		switch( $cmd )
		{
			default:
				$response = self::getContent($request);
			break;
		}
		
		if($inject_response!==FALSE)
		{
			$response = array_merge($inject_response, $response);
		}
		
		return $response;
	}
	
	
	protected function getContent($request)
	{
		$sql = "SELECT p.page_id, p.perma_link, p.page_content, p.meta_title, p.meta_keywords, p.meta_description, 
				t.template_name, t.template_file 
				FROM `page` AS p
				LEFT JOIN template AS t ON (t.template_id = p.template_id) 
				WHERE 
				p.perma_link = '{$request['search']['page']}' 
				AND p.flag_show = 1";
		
		global $connection;
		$response = array();
		$result = $connection->query($sql);
		$n = $result->num_rows;
		
		if($n==1)
		{
			while($row=$result->fetch_array(MYSQLI_ASSOC))
			{
				$response['page']['page_id'][ $row['page_id'] ] = $row['page_id'];
				$response['page']['perma_link'][ $row['page_id'] ] = $row['perma_link'];
				$response['page']['page_content'][ $row['page_id'] ] = $row['page_content'];
				
				$response['page']['meta_title'][ $row['page_id'] ] = $row['meta_title'];
				$response['page']['meta_keywords'][ $row['page_id'] ] = $row['meta_keywords'];
				$response['page']['meta_description'][ $row['page_id'] ] = $row['meta_description'];
				
				$response['page']['template_name'][ $row['page_id'] ] = $row['template_name'];
				$response['page']['template_file'][ $row['page_id'] ] = $row['template_file'];					
			}
		}
		else
		{
			die_with_header('404',"Page Not Found");
		}
		
		return $response;
	}
}