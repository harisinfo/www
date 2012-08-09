<?php
class AdviseManager {
	
	function registerPost($request, $login_request){
        global $post_required_fields;

        $response['register'] = 'true';
        $response['registered'] = 'false';
        
        if(isset($login_request['saloon_id'])&&$login_request['saloon_id']!=''&$login_request['saloon_id']!=0)
        {
        	foreach($post_required_fields as $key => $value){
            	if($request['search'][$value]==''){
                	$response['required_field'][$value] = 'required';
                	$response['register'] = 'false';
            	}
        	}
		}

        
        if($response['register']=='true'){
        	$this->addSaloonPost($request,$login_request);
			$response['registered'] = 'true';
        }

        return $response;
    }
    
	function addSaloonPost($request,$login_request){
        $response = array();
        $response['register_error'] = true;
        
        $date = date('Y-m-d H:i:s',strtotime("Now"));
        
        //var_dump($login_request);

        $sql = "INSERT INTO `saloon_advise` (saloon_id,post_date,modified_date,post_subject,post_heading,post_message,display) VALUES " .
                " ('".intval($login_request['saloon_id'])."','".$date."', '".$date."', '".intval($request['search']['post_subject'])."', '".$request['search']['post_heading']."','".$request['search']['post_message']."','".$request['search']['post_display']."') ";
                
        //echo $sql; 
        
		$esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
        
        $response['register_error'] = false;

        return $response;
    }
      

    function updateSaloonPost($request,$login){

        global $post_required_fields;
        
        $date = date('Y-m-d H:i:s',strtotime("Now"));
        
        $response['register'] = 'true';
        $response['registered'] = 'false';
        
        foreach($post_required_fields as $key => $value){
            if($request['search'][$value]==''){
                $response['required_field'][$value] = 'required';
                $response['register'] = 'false';
            }
        }
        
        if($response['register']=='true'){
        	$sql = "UPDATE saloon_advise SET modified_date = '{$date}', post_subject = ".intval($request['search']['post_subject']). ", " . 
        			"post_heading = '" . $request['search']['post_heading']. "', post_message = '" . $request['search']['post_message']. "' " .
        			" WHERE saloon_advise_id = {$request['search']['saloon_advise_id']} AND saloon_id = " . intval($login['saloon_id']);
        	
			$esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
			$response['registered'] = 'true';
		}

        return $response;
    }
    
    
    function removePost($request,$login){
    	
    	if(isset($request['search']['saloon_advise_id'])&&$request['search']['saloon_advise_id']!=''&&isset($login['saloon_id'])&&$login['saloon_id']!=''){
    		
    		$deletesql = "DELETE FROM `saloon_advise` WHERE saloon_advise_id = " . intval($request['search']['saloon_advise_id']) ;
    		mysql_query($deletesql) or die("MySQL Error: $deletesql<br />MySQL Error No: ".mysql_error());
    		
    		return 'success';
    	}
    	else{
			return 'fail';
    	}
		
    }
    
    
    function showSaloonPost($request=null){
        
                global $subject_advises;
                
                //var_dump($request);
        
                $response['results'] = false;
            
                $sql = "SELECT sa.saloon_advise_id, sa.saloon_id, sa.post_date, 
                        sa.post_subject, sa.post_heading, sa.post_message, sa.display, 
                        u.first_name
                        FROM saloon_advise AS sa
                        LEFT JOIN `user` AS u ON (u.saloon_id = sa.saloon_id)
                        ";
                
                $where = "WHERE u.user_type = 'SALOON' ";
                
                if(isset($request)&&isset($request['saloon_id'])){
                    $where = $where . " AND sa.saloon_id = " . $request['search']['saloon_id'];
                }
                
                if(isset($request)&&isset($request['search']['saloon_advise_id'])){
                    $where = $where . " AND sa.saloon_advise_id = " . $request['search']['saloon_advise_id'];
                }
                
                if(isset($request)&&isset($request['search']['post_subject'])&&trim($request['search']['post_subject'])!=''){
                    $where = $where . " AND sa.post_subject = " . $request['search']['post_subject'];
                }
                
                $order_by = " ORDER BY sa.post_date DESC, sa.modified_date DESC";
                
                $sql = $sql . $where . $order_by;
                
                //echo $sql;
                $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
                
                while($row=mysql_fetch_array($esql)){
                    $response['results'] = true;
                    $response['saloon_id'][$row['saloon_id']] = $row['saloon_id'];
                    $response['saloon_name'][$row['saloon_id']] = stripslashes( $row['first_name'] );
                    $response['saloon_advise_id'][$row['saloon_id']][$row['saloon_advise_id']] = $row['saloon_advise_id'];
                    $response['saloon_post_subject'][$row['saloon_id']][$row['saloon_advise_id']] = stripslashes( $subject_advises[$row['post_subject']] );
                    $response['post_subject'][$row['saloon_id']][$row['saloon_advise_id']] = $row['post_subject'];
                    $response['saloon_post_heading'][$row['saloon_id']][$row['saloon_advise_id']] = stripslashes( $row['post_heading'] );
                    $response['saloon_full_post_message'][$row['saloon_id']][$row['saloon_advise_id']] = stripslashes( $row['post_message'] );
                    
                    if(isset($request['search']['saloon_advise_id'])&&$request['search']['saloon_advise_id']!=NULL){
                        $response['saloon_post_message'][$row['saloon_id']][$row['saloon_advise_id']] = stripslashes( $row['post_message'] );
                    }else{
                        $response['saloon_post_message'][$row['saloon_id']][$row['saloon_advise_id']] = stripslashes( implode(' ', array_slice(explode(' ', $row['post_message']), 0, PREVIEW_WORDS)) );
                    }
                    
                    
                    $response['saloon_post_date'][$row['saloon_id']][$row['saloon_advise_id']] = $row['post_date'];
                }
                
                return $response;
                
    }
    
    

}
?>