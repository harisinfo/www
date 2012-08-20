<?php
/********************************************************
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk>		*
*														*
********************************************************/

include_once( __APPLICATIONS_ROOT . '/' . __APPLICATION_DIR . '/' . __MODULE_DIR .'/LoginManager/LoginManager.class.php');

class ConditionManager extends LoginManager
{    
	
	private $validateCondition = "validateConditionManager";
	private $template = '';
	private $module_name = "condition";

	function __construct()
	{
		$this->module = $this->request['search']['module'];
		//$this->template = parent::loadXML('register_condition.xml');
	}
	
	public function init($request, $cmd = FALSE )
	{
		global $registered_modules;
		
		$response = array();
		
		$response = $this->showConditionManager($request);
		$inject_response = inject_modules($this->module_name, $request, $cmd);
		
		if($inject_response!==FALSE && $inject_response!=NULL)
		{
			$response = array_merge($inject_response, $response);
		}
		
		
		return $response;
	}
		
	
	private function showConditionManager($request)
	{
		$response = $this->getConditionRelatedQuestions($request);
		
		
		if(isset($request['search']['ticket'])===true)
		{
			$validate_ticket = validate_ticket($request['search']['ticket']);
			
			if($validate_ticket['result']==true)
			{
				$validate_function = $this->validateCondition;
				
				if(method_exists($this, $validate_function) === true)
				{
					$errors = array();
					$errors = $this->$validate_function($response, $request);
					
					if($errors['error_found']===true)
					{
						$response = FormManager::saveFormResponse($request, $response);
						$response['errors'] = $errors;
					}
					else
					{
						$this->template = parent::loadXML($this->template);
						parent::saveForm($request, $response, $this->template);
						//$this->saveConditionRelatedQuestions($request);
						exit;
					}
				}
				else
				{
					die_with_header(500, "Bad Request");
				}
			}
			else
			{
				die_with_header(500, "Bad Request");
			}
		}
		
		return $response;
	}
	
	
	private function validateConditionManager($questions, $request)
	{
		$response = array();
		$response['error_found'] = false;
		$answers = array();
				
		foreach($questions['question_id'] as $key => $value)
		{
			if($questions['question_required'][$key]==1)
			{
				unset($answers);
				$answer_key = "answer_".$key;
				$more_info_key = "more_info_".$key;
				// hook for date fields
				
				if($key==23)
				{
					$answer_key_dd = "answer_dd_".$key;
					$answer_key_mm = "answer_mm_".$key;
					$answer_key_yyyy = "answer_yyyy_".$key;
					
					$answers['answer']['dd_'.$key] = $request['search'][$answer_key_dd];
					$answers['answer']['mm_'.$key] = $request['search'][$answer_key_mm];
					$answers['answer']['yyyy_'.$key] = $request['search'][$answer_key_yyyy];
				}
				
				$answers['answer'][$key] = $request['search'][$answer_key];
				$answers['more_info'][$key] = $request['search'][$more_info_key];
				$answers['template'][$key] = $questions['question_template'][$key];
				
				$validation_response = array();
				$validation_response = FormManager::validateForm($answers); // removed ,$response
				
				$response['error_flag'][$key] = $validation_response['error_flag'];
				$response['error_message'][$key] = $validation_response['error_message'];				
				
				if($validation_response['error_flag']==true)
				{
					$response['error_found'] = true;
				}
			}
		}
		
		return $response;
	}
	
	
	private function saveConditionManager($request)
	{
		
	}		
	
	// Class specific
	
	public function getConditionRelatedQuestions($request)
	{
		global $question_field, $connection;
		$response = array();
		$response['results'] = false;
		$response['condition_id'] = NULL;
				
		$query_request = array();

		$query_request['from']['primary_table'] = 'medical_condition';
		$query_request['from']['join_table'][0] = 'medical_condition_question';
		$query_request['from']['join_table'][1] = 'question';
		
		/*
		// Todo
		$query_request['where']['medical_condition_question']['medical_condition_id'][0] = intval($request['search']['condition_id']);
		$query_request['where']['medical_condition_question']['show_medical_condition_question'][0] = 1;
		$query_request['where']['medical_condition_question']['medical_condition_question_group'][0] = MEDICAL_CONDITION_QUESTION_SPECIFIC;
		
		$query_request['order_by']['medical_condition_question']['sort_order'][0] = 'ASC';
		
		$query_request['limit']['start'] = 0;
		$query_request['limit']['end'] = 1;
		*/
		

		$sql = $this->getResult( $query_request );
		$where = " WHERE medical_condition_question.medical_condition_id = " . intval($request['search']['condition_id']);
		$where .= " AND medical_condition_question.show_medical_condition_question = 1 ";
		$where .= " AND medical_condition_question.medical_condition_question_group =  " . MEDICAL_CONDITION_QUESTION_SPECIFIC;
		$order_by = " ORDER BY medical_condition_question.sort_order ASC";
		$sql = $sql . $where . $order_by;
		$esql = $connection->query($sql);
		
		$n = $esql->num_rows;
		
		
		if($n>0)
		{
			$response['results'] = true;
			$response['condition_id'] = $request['search']['condition_id'];
			
			$response['ticket'] = encrypt($this->module['manager_name']."_" . SITE_IDENTIFIER . "_" . 
									time() . "_" . intval($request['search']['condition_id']), KEYHASH);
			
			$field_locale = "question_text_" . DEFAULT_LABEL;
			$field_condition_locale = "medical_condition_label_" . DEFAULT_LABEL;
			
			while($row=$esql->fetch_array(MYSQLI_ASSOC))
			{
				$response['condition_name'] = $row[$field_condition_locale];
				$response['question_id'][$row['question_id']] = $row['question_id'];
				$response['question_text_default'][$row['question_id']] = $row[$field_locale];
				$response['question_template'][$row['question_id']] = $row['question_template'];
				$response['question_required'][$row['question_id']] = $row['flag_required'];
				$response['question_default_selection'][$row['question_id']] = $row['default_selection'];
			}
			
		}
		
		return $response;
	}
	
	
	private function getConditions($request=NULL)
	{
		global $medical_condition_label_table, $treatment_label_table, $connection;
		
		$medical_condition_label_table_lang = $medical_condition_label_table . "_" . DEFAULT_LABEL;
		$treatment_label_table_lang = $treatment_label_table . "_" . DEFAULT_LABEL;
		
		$sql = "SELECT mc.medical_condition_id, mc." . $medical_condition_label_table . ",  " . 
				"mc." . $medical_condition_label_table_lang . ", " . 
				"t.treatment_id, t." . $treatment_label_table . ", t." . $treatment_label_table_lang .
				"FROM medical_condition AS mc " . 
				"LEFT JOIN treatment AS t ON (t.treatment_id = mc.treatment_id) ";
				
		$where = "WHERE mc.medical_condition_id >= 1";
		
		if($request!=NULL)
		{
			// Check conditions
			if( isset($request['medical_condition_id']) === TRUE && is_numeric($request['medical_condition_id']) === TRUE )
			{
				$where .= " AND mc.medical_condition_id = " . intval( $request['medical_condition_id'] );
			}
			
			if( isset($request['treatment_id']) === TRUE && is_numeric($request['treatment_id']) === TRUE )
			{
				$where .= " AND t.treatment_id = " . intval( $request['treatment_id'] );
			}
			
			if( isset($request['is_admin']) === FALSE || is_numeric($request['is_admin']) === FALSE  )
			{
				// hide if not admin
				$where .= " AND mc.flag_hide = 0 AND t.flag_hide = 0";
			}
			
		}
				
		$order_by = "ORDER BY mc.sort_order, t.sort_order ASC";
		$sql = $sql . $where . $order_by;
		//$result = mysql_query($sql) or db_die($sql);
		$result = $connection->query($sql);
				
		while($row = $result->fetch_array(MYSQLI_ASSOC))
		{
			$response['medical_condition_id'][ $row['medical_condition_id'] ] = $row['medical_condition_id'];
			$response['treatment_id'][ $row['medical_condition_id'] ][ $row['treatment_id'] ] = $row['treatment_id'];
			
			$response['medical_condition_label'][ $row['medical_condition_id'] ] = $row['medical_condition_label'];
			$response['treatment_label'][ $row['medical_condition_id'] ][ $row['treatment_id'] ] = $row['treatment_label'];
			
			$response['medical_condition_label_lang'][ $row['medical_condition_id'] ] = 
			$row[$medical_condition_label_table_lang];
			
			$response['treatment_label_lang'][ $row['medical_condition_id'] ][ $row['treatment_id'] ] = 
			$row[$treatment_label_table_lang];
			
			$response['medical_condition_hide'][ $row['medical_condition_id'] ]  = $row['flag_hide_medical_condition'];
			$response['treatment_hide'][ $row['treatment_id'] ]  = $row['flag_hide_treatment'];
		}
		
		return $response;
	}
	
    
}