<?php
/********************************************************
*	Class to perform Search and other 		*
*	advanced search capabilities			*
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk>	*
*							*
********************************************************/

class RatingManager {


    function validateRatingRequest($request){

        if(is_numeric($request['search']['vote_value']) === FALSE){
            return 'false';
        }

        if($request['search']['vote_value'] < 0 || $request['search']['vote_value'] > 5){
            return 'false';
        }

        // TODO: check if user_hairstyle_id exists, avoid hack

        return 'true';
    }


    function rateHairStyle($request){
        $response['success'] = 'false';

        if($this->validateRatingRequest($request)=='false'){
            return $response;
        }

        $sql = "DELETE FROM hairstyle_rating
                WHERE session_vote_id = {$request['session']['session_vote_id']}
                AND user_hairstyle_id = {$request['search']['user_hairstyle_id']}";

        $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
        
        $sql = "INSERT INTO hairstyle_rating (session_vote_id, user_hairstyle_id, vote_value)
                VALUES ('{$request['session']['session_vote_id']}','{$request['search']['user_hairstyle_id']}','{$request['search']['vote_value']}')
                ON DUPLICATE KEY UPDATE vote_value = {$request['search']['vote_value']}";
                
        $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());

        $response = $this->updateRatingSummaryTable($request);

        return $response;
    }


    function updateRatingSummaryTable($request){
        $response['success'] = 'false';
        $average_vote_value = 0.000;

        $sql = "DELETE FROM hairstyle_rating_summary
                WHERE user_hairstyle_id = {$request['search']['user_hairstyle_id']}";

        $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());


        $vote_value_sql = "SELECT AVG(vote_value) AS vote_value_summary
                            FROM hairstyle_rating
                            WHERE user_hairstyle_id = {$request['search']['user_hairstyle_id']}";

        $evote_value_sql = mysql_query($vote_value_sql) or die("MySQL Error: $vote_value_sql<br />MySQL Error No: ".mysql_error());

            while($row=mysql_fetch_array($evote_value_sql)){
                $average_vote_value = $row['vote_value_summary'];
            }

        $sql = "INSERT INTO hairstyle_rating_summary (user_hairstyle_id, vote_value_summary)
                VALUES ('{$request['search']['user_hairstyle_id']}','{$average_vote_value}')";

        $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
        
        $response['success'] = 'true';

        return $response;

    }

}
?>
