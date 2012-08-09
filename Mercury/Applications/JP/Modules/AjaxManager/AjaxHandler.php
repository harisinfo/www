<?php
/********************************************************
*	Class to perform Search and other 					*
*	advanced search capabilities						*
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk>		*
*														*
********************************************************/

class AjaxHandler {

	function performCityLookup($request=null){
            $response = array();
            $sql = "SELECT DISTINCT(city) AS city FROM saloon";
            $request['limit'] = 10;            

            if($request!=null){
                    $where = " WHERE city LIKE '{$request['search']['city']}%'";
            }
            
            $order_by = " ORDER BY city ASC";
            $limit = " LIMIT 0, ".$request['search']['limit'];
            
            $sql = $sql.$where.$order_by.$limit;

            $esql = mysql_query($sql) or die("MySQL Error: $sql<br />\nMySQL Error: ".mysql_error());
            
            while($row=mysql_fetch_array($esql)){
                $response[] = $row['city'];
            }
                
		return $response;
	}
	
}
?>
