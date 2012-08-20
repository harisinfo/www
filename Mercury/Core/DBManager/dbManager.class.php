<?php
/**
* Class dbManager
* @author: Hari Ramamurthy
* @version: 1.0
*/

include_once( __CORE_DIR . '/XMLManager/XMLManager.class.php');

class dbManager extends XMLManager 
{
	public $request;
	
	public function getResult(array $request)
	{
		$this->request = $request;
		return $this->buildQuery( $request );
	}
	
	public function dbQuery( $sql )
	{
		$result = parent::query( $sql, MYSQLI_USE_RESULT );
		parent::close();
		return $result;
	}
	
	private function buildQuery( array $request )
	{
		//return $this->buildSelect($request) . $this->buildWhere($request) . $this->buildSort($request);
		return $this->buildSelect($request);
	}
	
	
	private function buildSelect($request)	
	{
		$sql = "SELECT ";
		$what = array();
		$from = " FROM ";
		$join = "";
		
		foreach( $request[ 'from' ] as $key => $value )
		{
			if( $key == 'primary_table' )
			{
				$what[] =  " {$request['from'][$key]}.* ";
				$from .= " {$request[ 'from' ][ $key ]} AS {$value} ";
			}
			else
			{
				if( $key == 'join_table' )
				{
					foreach( $request[ 'from' ][ 'join_table' ] AS $k => $v )	
					{
						if( $k == 0 )
						{
							$temp_join_table = $request['from']['primary_table'];
							
							$join .= " LEFT JOIN `{$request['from']['join_table'][$k]}` AS {$request['from']['join_table'][$k]} 
									ON ( {$request['from']['join_table'][$k]}.{$temp_join_table}_id 
									= {$temp_join_table}.{$temp_join_table}_id) ";
						}
						else
						{
							if( isset( $request['from']['join_table'][ $k - 1 ] ) === TRUE )
							{
								// simplest case of no over_ride
								
								$temp_join_table = $request['from']['join_table'][ $k - 1 ];
								
								$join .= " LEFT JOIN `{$request['from']['join_table'][$k]}` AS {$request['from']['join_table'][$k]} 
											ON ( {$request['from']['join_table'][$k]}.{$request['from']['join_table'][$k]}_id 
											= {$temp_join_table}.{$request['from']['join_table'][$k]}_id) ";
								
							}
							
						}
						
						$what [] =  " {$request['from']['join_table'][$k]}.* ";
					}
				}
			}
		}
		
		$query_what = implode(",",$what);
		
		$sql = $sql . $query_what . $from . $join;
		
		return $sql;
	}
	
	
	private function buildWhere(array $request)
	{
		$where = "";
		
		if( isset($request['where']) === TRUE && is_array($request['where']) === TRUE )
		{
			$where = "WHERE ";
			
			foreach( $request['where'] as $key => $value )
			{
				$query_request['where']['medical_condition_question']['medical_condition_id']['equal'] = intval($request['search']['condition_id']);
				$query_request['where']['medical_condition_question']['show_medical_condition_question']['like'] = 1;
				$query_request['where']['medical_condition_question']['medical_condition_question_group']['not_equal'] = MEDICAL_CONDITION_QUESTION_SPECIFIC;
				
				
				$where = " WHERE medical_condition_question.medical_condition_id = " . intval($request['search']['condition_id']);
				$where .= " AND medical_condition_question.show_medical_condition_question = 1 ";
				$where .= " AND medical_condition_question.medical_condition_question_group =  " . MEDICAL_CONDITION_QUESTION_SPECIFIC;
				
			}
		}
	}
	
}
