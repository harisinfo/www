<?php
class ConfigManager {
	
	function getConfig()
	{
		$response = array();
		
		$sql = "SELECT s.* FROM site_options AS s";
		$esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
		$n = mysql_num_rows($esql);
    
		if($n > 0){
			
			while($row=mysql_fetch_array($esql)){
				$response[$row['site_option_variable']] = $row['site_option_value'];
			}
			
		}
		
		return $response;
	}
	
	function updateGoogleLatLong($request=NULL)
	{
		$site_config = array();
		$site_config = $this->getConfig();
		
		
		echo "<pre>";
		
		if(!isset($request)||$request==NULL){
			
			$sql = "SELECT s.* FROM saloon AS s 
					WHERE TRIM(s.geo_lat) LIKE '' OR TRIM(s.geo_long) LIKE ''
					ORDER BY s.saloon_id ASC";
					
		}else{
			
			if(isset($request['search']['force'])&&$request['search']['force']==1&&isset($request['search']['saloon_id'])){
			
				$sql = "SELECT s.* FROM saloon AS s 
						WHERE s.saloon_id = " . $request['search']['saloon_id'];
			}else{
				
				echo "Missing parameters";
				exit;
			}
					
		}
				
		$esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
		$n = mysql_num_rows($esql);
    
		if($n > 0){
			
			while($row=mysql_fetch_array($esql)){
				
				$address = urlencode($row['address_line_1'].' '.$row['address_line_2'].'' . 
							$row['city'].' '.$row['state'].' '.$row['postcode'].' '.$row['country_id']);
							
				$json_address_url = 'http://maps.google.com/maps/geo?q=' . 
										$address . '&output=json&oe=utf8\&sensor=true_or_false&key=' . 
										$site_config['api_key'];
				
				$address_data_array = json_decode(file_get_contents($json_address_url));
				
				$geo_location = $address_data_array->Placemark[0]->Point->coordinates;
				
				$geo_lat = $geo_location[0];
				$geo_long = $geo_location[1];
				
				$upsql = "UPDATE saloon SET geo_lat = '{$geo_lat}', geo_long = '{$geo_long}' WHERE saloon_id = {$row['saloon_id']}";
				$eupsql = mysql_query($upsql) or die("MySQL Error: $upsql<br />MySQL Error No: ".mysql_error());
				
				echo "Update Saloon: {$row['saloon_id']} with latitude {$geo_lat} and longitude {$geo_long}<br />";
				
			}
			
		}
		
		echo "</pre>";
	}
}
?>