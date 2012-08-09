<?php
/********************************************************
*	Class to perform Search and other 		*
*	advanced search capabilities			*
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk>	*
*							*
********************************************************/

class Search {
    
    
    function performSearchHairStyles($request=null){

        $response = array();
        global $rating_messages;

        $response['rating_messages'] = $rating_messages;
        $response['results'] = false;
        $end_limit = NO_OF_RESULTS_HS;
        
        if(!isset($request['search']['start_page'])){
            $start_limit = 0;
        }else{
            $start_limit = ($request['search']['start_page'] * NO_OF_RESULTS_HS) + 1;
        }
        
        $sql = "SELECT u.user_id,u.first_name,u.last_name,
                uh.user_hairstyle_id,uh.hairstyle_upload_image,uh.upload_date,
                v.vote_value_summary
                FROM user AS u
                LEFT JOIN user_hairstyle AS uh ON (uh.user_id = u.user_id)
                LEFT JOIN hairstyle_rating_summary AS v ON (v.user_hairstyle_id = uh.user_hairstyle_id)";
        
        $where = " WHERE uh.user_hairstyle_id IS NOT NULL ";
                                
        $order_by = " ORDER BY uh.upload_date DESC";
                        
        if($request['search']['search_type']=='home_page'){
            $start_limit = 0;
            $end_limit = NO_OF_RECORDS;
        }

        
        if(isset($request['search']['user_id'])&&$request['search']['user_id']!= NULL){
            $where = $where . " AND u.user_id = " . $request['search']['user_id'];
        }

        if($request['search']['search_type']=='top_page'){
            $start_limit = 0;
            $end_limit = NO_OF_RESULTS_TOP_HS;
            $order_by = " ORDER BY v.vote_value_summary DESC";
        }
        
        
        $limit = " LIMIT " . $start_limit . ", " . $end_limit;
        
        $sql = $sql . $where . $order_by . $limit;

        // Change SQL for top 10

            if($debug==true){
                echo $sql;
            }
        
        $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
        
        while($row=mysql_fetch_array($esql)){
            $response['results'] = true;
            $response['user_hairstyle_id'][$row['user_hairstyle_id']] = $row['user_id'];
            $response['user_first_name'][$row['user_id']] = $row['first_name'];
            $response['user_last_name'][$row['user_id']] = $row['last_name'];
            $response['user_hairstyle_vote'][$row['user_hairstyle_id']] = $row['vote_value_summary'];
            $response['user_hairstyle_image'][$row['user_hairstyle_id']] = $row['hairstyle_upload_image'];
            $response['user_hairstyle_date'][$row['user_hairstyle_id']] = $row['upload_date'];
            $response['user_hairstyle_vote'][$row['user_hairstyle_id']] = ceil($row['vote_value_summary']);
        }
        
        return $response;
    }
    
    function performSearchSaloons($request=null){
        
        // Generic query to list users and hairstyles
        $response = array();
        $response['results'] = false;
        $end_limit = NO_OF_RESULTS_SALOONS;
        
        if(!isset($request['search']['start_page'])){
            $start_limit = 0;
        }else{
            $start_limit = ($request['search']['start_page'] * NO_OF_RESULTS_SALOONS) + 1;
        }
        
        $sql = "SELECT s.saloon_id, s.saloon_join_date, s.saloon_type, s.city, s.state,
                s.address_line_1, s.address_line_2,
                s.postcode, s.country_id, s.telephone, s.price_list, s.free_haircuts, s.special_offer, s.courses_training, s.vacancies, 
                s.geo_lat, s.geo_long,
                u.first_name, u.last_name, u.user_type, u.user_password AS password,
                si.saloon_image_id,si.saloon_upload_image, si.is_primary
                FROM saloon AS s
                LEFT JOIN user AS u ON (u.saloon_id = s.saloon_id)
                LEFT JOIN saloon_image AS si ON (si.saloon_id = s.saloon_id)";
        
        $where = " WHERE u.user_type = 'SALOON' ";
                                
        $order_by = " ORDER BY s.saloon_join_date DESC";
                        
        if($request['search']['search_type']=='home_page'){
            $start_limit = 0;
            $end_limit = NO_OF_RECORDS;
        }
        
        if(isset($request['search']['saloon_id'])&&$request['search']['saloon_id']!= NULL){
            $where = $where . " AND u.saloon_id = " . $request['search']['saloon_id'];
        }

        if(isset($request['search']['city'])&&$request['search']['city']!=NULL&&$request['search']['city']!=''){
            $where = $where . " AND s.city LIKE '" . $request['search']['city'] . "'";
        }

        if(isset($request['search']['saloon_type'])&&$request['search']['saloon_type']!=NULL&&$request['search']['saloon_type']!=''){
            $where = $where . " AND s.saloon_type = '" . $request['search']['saloon_type'] . "'";
        }

        if(isset($request['search']['postcode'])&&$request['search']['postcode']!=NULL&&$request['search']['postcode']!=''){
            $where = $where . " AND s.postcode LIKE '%" . $request['search']['postcode'] . "%'";
        }

        if(isset($request['search']['free_hair_cuts'])&&$request['search']['free_hair_cuts']!=NULL&&$request['search']['free_hair_cuts']==1){
            $where = $where . " AND s.free_haircuts NOT LIKE ''";
        }

        if(isset($request['search']['special_offer'])&&$request['search']['special_offer']!=NULL&&$request['search']['special_offer']==1){
            $where = $where . " AND s.special_offer NOT LIKE ''";
        }

        if(isset($request['search']['courses_training'])&&$request['search']['courses_training']!=NULL&&$request['search']['courses_training']==1){
            $where = $where . " AND s.courses_training NOT LIKE ''";
        }
        
        if(isset($request['search']['vacancies'])&&$request['search']['vacancies']!=NULL&&$request['search']['vacancies']==1){
            $where = $where . " AND s.vacancies NOT LIKE ''";
        }
        
        $limit = " LIMIT " . $start_limit . ", " . $end_limit;
        
        $sql = $sql . $where . $order_by . $limit;

        if($debug==true){
                $response['sql'] = $sql;
            }
        
        $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
        
        while($row=mysql_fetch_array($esql)){
            $response['results'] = true;
            $response['saloon_id'][$row['saloon_id']] = $row['saloon_id'];
            $response['saloon_name'][$row['saloon_id']] = $row['first_name'];
            $response['password'][$row['saloon_id']] = $row['password'];
            $response['saloon_city'][$row['saloon_id']] = $row['city'];
            $response['saloon_state'][$row['saloon_id']] = $row['state'];
            $response['price_list'][$row['saloon_id']] = $row['price_list'];
            $response['free_haircuts'][$row['saloon_id']] = $row['free_haircuts'];
            $response['special_offer'][$row['saloon_id']] = $row['special_offer'];
            $response['courses_training'][$row['saloon_id']] = $row['courses_training'];
            $response['vacancies'][$row['saloon_id']] = $row['vacancies'];

            $response['saloon_address_line_1'][$row['saloon_id']] = $row['address_line_1'];
            $response['saloon_address_line_2'][$row['saloon_id']] = $row['address_line_2'];
            $response['saloon_postcode'][$row['saloon_id']] = $row['postcode'];
            $response['saloon_telephone'][$row['saloon_id']] = $row['telephone'];
            $response['saloon_image'][$row['saloon_image_id']] = $row['saloon_upload_image'];
            $response['saloon_image_primary'][$row['saloon_image_id']] = $row['is_primary'];
            $response['geo_lat'][$row['saloon_id']] = $row['geo_lat'];
            $response['geo_long'][$row['saloon_id']] = $row['geo_long'];

            $response['saloon_images'][$row['saloon_id']][$row['saloon_image_id']] = $row['saloon_upload_image'];
            $response['saloon_images_primary'][$row['saloon_id']][$row['saloon_image_id']] = $row['is_primary'];
            
            	if($row['saloon_upload_image']==NULL){
					$response['saloon_images_exist'] = FALSE;
            	}else{
					$response['saloon_images_exist'] = TRUE;
            	}
        }
        
        return $response;
    }
    
    function performSearchSaloonEmployee($request){
        
        // Generic query to list users and hairstyles
        $response = array();
        $response['results'] = false;
        
        $sql = "SELECT se.saloon_employee_id, u.user_id, u.first_name, u.last_name, u.user_type, u.user_designation, 
                se.employee_image, sec.comment_date
                FROM `user` AS u
                LEFT JOIN saloon_employee AS se ON (se.user_id = u.user_id)
                LEFT JOIN saloon_employee_comment AS sec ON (sec.saloon_employee_id = se.saloon_employee_id)";
        
        $where = " WHERE u.user_type = 'EMPLOYEE' AND se.saloon_id = " . $request['search']['saloon_id'];
        
        /* 
        Perform check if user is saloon is logged in or not, so as to update user profiles or create new ones 
        */
        
        $order_by = " ORDER BY u.join_date DESC";
                        
        
        
        if(isset($request['search']['saloon_id'])&&$request['search']['saloon_id']!= NULL){
            $where = $where . " AND se.saloon_id = " . $request['search']['saloon_id'];
        }
        
        
        
        $sql = $sql . $where . $order_by ;

        if($debug==true){
                $response['sql'] = $sql;
        }
        
        $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
        
        while($row=mysql_fetch_array($esql)){
            $response['results'] = true;
            $response['saloon_employee_id'][$row['saloon_employee_id']] = $row['saloon_employee_id'];
            $response['first_name'][$row['saloon_employee_id']] = $row['first_name'];
            $response['last_name'][$row['saloon_employee_id']] = $row['last_name'];
            $response['employee_image'][$row['saloon_employee_id']] = $row['employee_image'];
            $response['user_designation'][$row['saloon_employee_id']] = $row['user_designation'];
            $response['user_id'][$row['saloon_employee_id']] = $row['user_id'];
        }
        
        return $response;
    }
    
    
    function performSearchSaloonPosts($request){
    	
    	global $subject_advises;
        
        // Generic query to list users and hairstyles
        $response = array();
        $response['results'] = false;
        
        $sql = "SELECT sa.*
                FROM `saloon_advise` AS sa";
        $where = " WHERE sa.saloon_id = " . intval($request['search']['saloon_id']);
        $order_by = " ORDER BY sa.post_date, sa.modified_date DESC";
        
        $sql = $sql . $where . $order_by ;
        $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
        
        while($row=mysql_fetch_array($esql)){
            $response['results'] = true;
            $response['saloon_advise_id'][$row['saloon_advise_id']] = $row['saloon_advise_id'];
            $response['post_date'][$row['saloon_advise_id']] = $row['post_date'];
            $response['modified_date'][$row['saloon_advise_id']] = $row['modified_date'];
            $response['post_heading'][$row['saloon_advise_id']] = $row['post_heading'];
            $response['post_subject'][$row['saloon_advise_id']] = $row['post_subject'];
            $response['subject'][$row['saloon_advise_id']] = stripslashes( $subject_advises[ $row['post_subject'] ] );
            $response['post_message'][$row['saloon_advise_id']] =  stripslashes( implode(' ', array_slice(explode(' ', $row['post_message']), 0, PREVIEW_WORDS)) );
            $response['post_keywords'][$row['saloon_advise_id']] = $row['post_keywords'];
            $response['display'][$row['saloon_advise_id']] = $row['display'];
        }
        
        return $response;
    }

}
?>
