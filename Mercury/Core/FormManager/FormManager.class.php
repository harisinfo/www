<?php
/********************************************************
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk>		*
********************************************************/

include_once( __CORE_DIR . '\\SessionManager\\SessionManager.class.php');
//include_once( __CORE_DIR . '\\XMLManager\\XMLManager.class.php');

class FormManager extends SessionManager
{    
	
	protected function validateForm($request)
	{
		$response = array();
		$response['error_flag'] = false;
		$response['error_message'] = '';

		
		foreach($request['template'] as $key => $value)
		{
			switch($value)
			{
				case 'YES_MORE_DETAILS_NO':
				
					if(isset($request['answer'][$key]) === true)
					{
						if(intval($request['answer'][$key]) == 1&&trim($request['more_info'][$key])=='')
						{
							$response['error_flag'] = true;
							$response['error_message'] = MORE_INFO_REQUIRED_YES_SOMETIMES;
						}
							
					}
					else
					{
						$response['error_flag'] = true;
						$response['error_message'] = ANSWER_SELECTION_REQUIRED;
					}
					
				break;
				
				case 'YES_NO_MORE_DETAILS':
				
					if(isset($request['answer'][$key]) === true)
					{
						if(intval($request['answer'][$key]) == 0&&trim($request['more_info'][$key])=='')
						{
							$response['error_flag'] = true;
							$response['error_message'] = MORE_INFO_REQUIRED_YES_SOMETIMES;
						}
							
					}
					else
					{
						$response['error_flag'] = true;
						$response['error_message'] = ANSWER_SELECTION_REQUIRED;
					}
					
				break;
				
				case 'DD_MM_YYYY':
					
					if(isset($request['answer']['dd_'.$key]) === true&&isset($request['answer']['mm_'.$key]) === true
						&&isset($request['answer']['yyyy_'.$key]) === true)
					{
						if(intval($request['answer']['dd_'.$key])==0||intval($request['answer']['mm_'.$key])==0||intval($request['answer']['yyyy_'.$key])==0)
						{
							$response['error_flag'] = true;
							$response['error_message'] = ANSWER_SELECTION_REQUIRED;
						}
					}
					else
					{
						$response['error_flag'] = true;
						$response['error_message'] = ANSWER_SELECTION_REQUIRED;
					}

				break;
				
				case 'MORE_DETAILS':
					if(isset($request['more_info'][$key]) === true)
					{
						if(trim($request['more_info'][$key])=='')	
						{
							$response['error_flag'] = true;
							$response['error_message'] = MORE_INFO_REQUIRED_YES_SOMETIMES;
						}
					}
					else
					{
						$response['error_flag'] = true;
						$response['error_message'] = MORE_INFO_REQUIRED_YES_SOMETIMES;
					}
				break;
				default:
				// do nothing
				break;
			}
			
			
		}
		
		return $response;
	}
	
	
	protected function saveForm($request, $response, $template)
	{
		// get all the inputs and save form
		echo "Save Form";
		$response = $this->saveFormResponse($request, $response, $template);
	}
	
	
	
	protected function saveFormResponse($request, $response, $template)
	{
		foreach($response['question_id'] as $key=>$value)
		{
			$answer_key = "answer_".$key;
			$more_info_key = "more_info_".$key;
			
			if(isset($request['search'][$answer_key]) === true)
			{
				switch($request['search'][$answer_key])
				{
					case '1':
					$answer = 'YES';
					break;
					case '0':
					$answer = 'NO';
					break;
					case '2':
					$answer = 'SOMETIMES';
					break;
					default:
					// do nothing
					break;
				}
				
				$response['question_default_selection'][$key] = $answer;
			}
			
			if(isset($request['search'][$more_info_key]) === true)
			{
				$response['question_more_info'][$key] = $request['search'][$more_info_key];
			}
		}
		
		return $response;
	}
    
}