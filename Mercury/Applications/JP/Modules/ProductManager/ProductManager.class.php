<?php
/********************************************************
*	Class to perform Search  on Conditions and other 	*
*	advanced search capabilities						*
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk>		*
*														*
********************************************************/

include_once( __APPLICATIONS_ROOT . '\\' . __APPLICATION_DIR . '\\' . __MODULE_DIR .'\\LoginManager\\LoginManager.class.php');

class ProductManager extends LoginManager
{    
	
	public function init($request, $cmd = FALSE )
	{
		switch( $cmd )
		{
			default:
			return $this->showProductManager($request);
		}
	}
	
	
	private function showProduct($request)
	{
		
	}
		
	
	private function showProductManager($request)
	{
		if(isset($request['search']['product_group'])===true && is_numeric($request['search']['product_group'])===true)
		{
			// condition products	
		}
		else
		{
			return $this->showNormalProduct($request);
		}
		
	}
	
	
	private function showNormalProduct($request)
	{
		global $connection;
		
		$response = array();
		
		$p_sql = "SELECT p.*, pi.image_id FROM product AS p 
					LEFT JOIN product_image AS pi ON (pi.product_id = p.product_id) ";
		
		$where_sql = "WHERE ";
					
		if(isset($request['search']['category_id'])===TRUE && is_int($request['search']['category_id'])===TRUE)
		{
			$where_sql .= " p.category_id = {$request['search']['category_id']} ";
		}
		
		if(isset($request['search']['sub_category_id'])===TRUE && is_int($request['search']['sub_category_id'])===TRUE)
		{
			$where_sql .= " p.sub_category_id = {$request['search']['sub_category_id']} ";
		}
		
		if(isset($request['search']['ui_source'])===TRUE&&$request['search']['ui_source']!='admin')
		{
			//$where_sql .= " p.flag_hide=0 AND pi.flag_hide=0 ";
		}
		else
		{
			// hide all hidden products
			$where_sql .= " p.flag_hide=0 AND (pi.flag_hide=0 OR pi.flag_hide IS NULL) ";
		}
		
		$order_by = " ORDER BY p.flag_featured_product DESC ";
		
		if( $request['search']['module']=='home')
		{
			$order_by .= ", p.flag_featured_home DESC";
		}
		
		$order_by .= ", p.rrp ASC";
		
		$sql = $p_sql . $where_sql . $order_by;
		$result = $connection->query($sql);
		$n = $result->num_rows;
		
		if($n>0)
		{
			while($row=$result->fetch_array(MYSQLI_ASSOC))
			{
				$response['product'][ 'product_id' ] = $row['product_id'];
			}
		}
		
		return $response;
	}
	
}