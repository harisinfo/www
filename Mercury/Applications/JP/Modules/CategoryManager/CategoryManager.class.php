<?php

include_once( __CORE_DIR . '/URLManager/URLManager.class.php');

class CategoryManager extends URLManager
{
	private $module_name = 'category';
	
	public function init($request, $cmd = FALSE)
	{
		global $registered_modules;
		
		$response = array();
		
		switch($cmd)
		{
			case '':
			default: 
				$response = $this->showCategoryManager($request);
			break;
		}
		
		$inject_response = inject_modules($this->module_name, $request, $cmd);
		
		if($inject_response!==FALSE && $inject_response!=NULL)
		{
			$response = array_merge($inject_response, $response);
		}

		return $response;
	}
	
	
	protected function showCategoryManager( $request )
	{
		global $connection;
		$response = array();
		$sql = "SELECT c.*, sc.sub_category_id, sc.sub_category_label, sc.sub_category_name 
				FROM category AS c
				LEFT JOIN sub_category AS sc ON (sc.category_id=c.category_id) ";

		if(isset($request['search']['ui_source'])===TRUE&&$request['search']['ui_source']!='admin')
		{
			// will think about this later
		}
		else
		{
			$where = "WHERE c.flag_hide=0 AND c.flag_delete=0";
		}
		
		$order_by = " ORDER BY c.sort_order ASC, c.category_label ASC, sc.sub_category_label ASC";
		$sql = $sql . $where . $order_by;
		$result = $connection->query($sql);

		while($row=$result->fetch_array(MYSQLI_ASSOC))
		{
			$response['category_id'][$row['category_id']] = $row['category_id'];
			$response['category_label'][$row['category_id']] = $row['category_label'];
			$response['sub_category_id'][$row['category_id']][$row['sub_category_id']] = $row['sub_category_id'];
			$response['sub_category_label'][$row['category_id']][$row['sub_category_id']] = $row['sub_category_label'];
			$response['sub_category_seo'][$row['category_id']][$row['sub_category_id']] = URLManager::init($row['sub_category_label']);
		}
		
		return $response;
	}

}