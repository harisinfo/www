<?php
/********************************************************
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk>		*
********************************************************/

include_once( __APPLICATIONS_ROOT . '\\' . __APPLICATION_DIR . '\\' . __MODULE_DIR .'\\LoginManager\\LoginManager.class.php');

class ProductManager extends LoginManager
{   
 
	private $module_name = 'home';
	
	public function init($request, $cmd = FALSE )
	{
		global $registered_modules;
		$response = array();
		$response = $this->showProductManager($request);
		$inject_response = inject_modules($this->module_name, $request, $cmd);
		
		if($inject_response!==FALSE)
		{
			$response = array_merge($inject_response, $response);
		}
		
		return $response;		
	}
	
	
	protected function showProductManager($request)
	{
		if(isset($request['search']['condition_id'])===true && is_numeric(intval($request['search']['condition_id']))===true)
		{
			// condition products	
		}
		else
		{
			return $this->showNormalProduct($request);
		}
		
	}
	
	
	protected function showConditionRelatedProducts($request)
	{
		
	}
	
	
	protected function showNormalProduct($request)
	{
		global $connection;
		$response = array();
		$result = $connection->query($this->buildNormalProductQuery($request));
		$n = $result->num_rows;
		
		if($n>0)
		{
			while($row=$result->fetch_array(MYSQLI_ASSOC))
			{
				$response['product']['product_id'][ $row['product_id'] ] = $row['product_id'];
				$response['product']['brand'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['brand'];
				$response['product']['product_keyword'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_keyword'];
				$response['product']['product_title'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_title'];
				$response['product']['product_description'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_description'];
				$response['product']['product_attributes'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_attributes'];
				$response['product']['flag_requires_questionaire'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['flag_requires_questionaire'];
				$response['product']['flag_requires_doctor_approval'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['flag_requires_doctor_approval'];
				$response['product']['product_description'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_description'];
				$response['product']['product_keyword'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_keyword'];
				
				// Product Details
				$response['product']['product_name'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_detail_name'];
				$response['product']['rrp'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_rrp'];
				$response['product']['product_detail_name'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_detail_name'];
				$response['product']['product_detail_description'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_detail_description'];
				
				$response['product']['product_detail_image_main'][ $row['product_id'] ][ $row['product_detail_id'] ] = 
					__PRODUCT_IMAGES_DIR . $row['image_id'] . '.' . $row['image_extension'];
				
				
				if(isset($request['search']['product_id'])===TRUE&&is_int(intval($request['search']['product_id']))===TRUE
					&&intval($request['search']['product_id'])>0)
				{
					$response['product']['product_detail_attribute'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_detail_attribute'];
					$response['product']['product_detail_keyword'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_detail_keyword'];
				}
					
			}
		}
		
		//echo "<pre>"; print_r($response['product']); echo "</pre>";
		return $response;
	}
	
	
	private function buildNormalProductQuery($request)
	{
		$p_sql = "SELECT p.*, pdi.image_id, pdi.image_extension, 
					pd.product_detail_id, pd.product_rrp, pd.product_sp_inc_vat, pd.product_detail_label, 
					pd.product_detail_name, pd.dispense_ml, pd.dispense_number, pd.dispense_mg 
					FROM product AS p 
					LEFT JOIN product_detail AS pd ON (pd.product_id = p.product_id)
					LEFT JOIN product_detail_image AS pdi ON (pdi.product_detail_id = pd.product_detail_id) ";
		$where = " WHERE ";
		$order_by = " ORDER BY ";
		$where_sql = array();
		$order_sql = array();
					
		if(isset($request['search']['category_id'])===TRUE && is_int(intval($request['search']['category_id']))===TRUE)
		{
			$where_sql[] = " p.category_id = {$request['search']['category_id']} ";
		}
		
		if(isset($request['search']['sub_category_id'])===TRUE && is_int(intval($request['search']['sub_category_id']))===TRUE)
		{
			$where_sql[] = " p.sub_category_id = {$request['search']['sub_category_id']} ";			
		}
		
		if(isset($request['search']['product_id'])===TRUE && is_int(intval($request['search']['product_id']))===TRUE)
		{
			$where_sql[] = " p.product_id = {$request['search']['product_id']} ";
		}
		
		if(isset($request['search']['ui_source'])===TRUE&&$request['search']['ui_source']!='admin')
		{
			// do nothing
		}
		else
		{
			// exclude hidden / deleted products		
			$where_sql[] = " p.flag_hide=0 AND (pdi.flag_hide=0 OR pdi.flag_hide IS NULL) ";
		}
		
		if(count($where_sql)>0)
		{
			$where .= implode(" AND ", $where_sql);
		}
		
		if( $request['search']['module']=='home')
		{
			$order_sql[] = " p.flag_featured_home DESC";
		}
		
		$order_sql[] = " p.flag_featured_product DESC ";
		$order_sql[] = " pd.product_rrp ASC ";
		$order_by .= implode(",", $order_sql);
		$sql = $p_sql . $where . $order_by;

		return $sql;
	}
	
}