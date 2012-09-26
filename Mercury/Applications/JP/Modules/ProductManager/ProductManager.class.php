<?php
/********************************************************
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk>		*
********************************************************/

include_once( __APPLICATIONS_ROOT . '/' . __APPLICATION_DIR . '/' . __MODULE_DIR .'/LoginManager/LoginManager.class.php');

class ProductManager extends LoginManager
{   
 
	protected $module_name = 'product';
	
	public function init($request, $cmd = FALSE )
	{
		global $registered_modules;
		$response = array();
		$inject_response = array();
		
		$response = $this->showProductManager($request);
		$inject_response = inject_modules($this->module_name, $request, $cmd);	
		
		if($inject_response!==FALSE&&$inject_response!=NULL)
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
			return $this->showNormalProduct($request);
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
				$response['product']['medical_condition_id'][ $row['product_id'] ] = $row['medical_condition_id'];
				$response['product']['brand'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['brand'];
				$response['product']['product_keyword'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_keyword'];
				$response['product']['product_title'][ $row['product_id'] ] = $row['product_title'];
				$response['product']['product_description'][ $row['product_id'] ] = $row['product_description'];
				$response['product']['product_attributes'][ $row['product_id'] ] = $row['product_attributes'];
				$response['product']['flag_requires_questionaire'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['flag_requires_questionaire'];
				$response['product']['flag_requires_doctor_approval'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['flag_requires_doctor_approval'];
				$response['product']['product_description'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_description'];
				$response['product']['product_keyword'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_keyword'];
				
				// Product Details
				$response['product']['product_name'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_detail_name'];
				$response['product']['rrp'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_rrp'];
				$response['product']['product_sp'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_sp_inc_vat'];
				$response['product']['product_detail_name'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_detail_name'];
				$response['product']['product_detail_description'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_detail_description'];
				$response['product']['combine_product_id'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['combine_product_id'];
				
				$response['product']['dispense_type'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['dispense_type'];
				$response['product']['dispense_number'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['dispense_number'];
				$response['product']['dispense_mg'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['dispense_mg'];
				$response['product']['dispense_ml'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['dispense_ml'];
				
				// Product Detail Price Override
				
				$response['product']['price_override'][ $row['product_id'] ][ $row['product_detail_id'] ] = $row['product_price_inc_vat'];
				
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
					pd.product_detail_name, pd.dispense_ml, pd.dispense_number, pd.dispense_mg, pd.product_detail_id, pd.combine_product_id,
					pd.product_detail_description, pd.dispense_type, pdpo.product_price_inc_vat, mcp.medical_condition_id       
					FROM product AS p 
					LEFT JOIN product_detail AS pd ON (pd.product_id = p.product_id)
					LEFT JOIN product_detail_image AS pdi ON (pdi.product_detail_id = pd.product_detail_id) 
					LEFT JOIN product_detail_price_override AS pdpo ON (pdpo.product_detail_id = pd.product_detail_id) 
					LEFT JOIN medical_condition_product AS mcp ON (mcp.product_id = p.product_id) ";
					
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
		
		$order_sql[] = " pd.product_id ASC ";
		$order_sql[] = " pd.combine_product_id DESC ";
		
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
