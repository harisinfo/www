<?php
/********************************************************
*	Class to perform Search and other 		*
*	advanced search capabilities			*
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk>	*
*							*
********************************************************/

class MetaManager {

	function getMetaFields($request=null){
                            //var_dump($request);
                            $response = array();
                            $sql = "SELECT * FROM site_config";
                                if($request!=null){
                                    $where = " WHERE search_keyphrase LIKE '".$request['search']['search_keyphrase']."'";
                                    $group_by = "";
                                }else{
                                    $where="";
                                    $group_by = " GROUP BY search_keyphrase";
                                }

                            $sql = $sql.$where.$group_by;
                            
                            $esql = mysql_query($sql) or die("MySQL Error SQL: $sql<br />\nMySQL Error: ".mysql_error());
                            while($row=mysql_fetch_array($esql)){
                                    $response['config_name'][$row['site_config_id']] = $row['config_name'];
                                    $response['search_keyphrase'][$row['site_config_id']] = $row['search_keyphrase'];
                                    $response['config_value'][$row['site_config_id']] = $row['config_value'];
                            }
                
	return $response;
	}

        function getHotelMetaFields($request=null){
                            //var_dump($request);
                            $response = array();
                            $sql = "SELECT hc.*, h.hotel_name FROM hotel_config hc
                                    LEFT JOIN hotels AS h ON (h.hotel_id=hc.hotel_id)";
                                if($request!=null){
                                    $where = " WHERE hc.hotel_id = ".$request['search']['hotel_id']."";
                                    $group_by = "";
                                }else{
                                    $where="";
                                    $group_by = " GROUP BY hc.hotel_id";
                                }

                            $sql = $sql.$where.$group_by;

                            //echo $sql;

                            $esql = mysql_query($sql) or die("MySQL Error SQL: $sql<br />\nMySQL Error: ".mysql_error());
                            while($row=mysql_fetch_array($esql)){
                                    $response['hotel_name'][$row['hotel_config_id']] = $row['hotel_name'];
                                    $response['config_name'][$row['hotel_config_id']] = $row['config_name'];
                                    $response['hotel_id'][$row['hotel_config_id']] = $row['hotel_id'];
                                    $response['config_value'][$row['hotel_config_id']] = $row['config_value'];
                            }

	return $response;
	}


        function addMetaFields($request){
                $errors = array();
                foreach($request['search'] as $key => $value){
                    if(($key=='meta_title'||$key=='meta_keywords'||$key=='meta_description')&&$value!=''){
                        $key = ucwords(str_replace("_"," ",$key));
                        $sql = "INSERT INTO site_config (config_name,search_keyphrase,config_value) VALUES ('{$key}','{$request['search']['search_keyphrase']}','{$value}')";
                        mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
                    }
                }
                $errors['error'] = 'false';
                $errors['msg'] = 'Meta field added successfully.';
                return $errors;
        }

        function addHotelMetaFields($request){
                $errors = array();
                foreach($request['search'] as $key => $value){
                    if(($key=='meta_title'||$key=='meta_keywords'||$key=='meta_description')&&$value!=''){
                        $key = ucwords(str_replace("_"," ",$key));
                        $sql = "INSERT INTO hotel_config (config_name,hotel_id,config_value) VALUES ('{$key}','{$request['search']['hotel_id']}','{$value}')";
                        mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
                    }
                }
                $errors['error'] = 'false';
                $errors['msg'] = 'Meta field added successfully.';
                return $errors;
        }

        

        function updateMetaFields($request){
                $errors = array();
                
                foreach($request['search'] as $key => $value){
                    if(($key=='meta_title'||$key=='meta_keywords'||$key=='meta_description')&&$value!=''){
                        $sql = "UPDATE site_config SET config_value = '".$request['search'][$key]."'
                                WHERE search_keyphrase LIKE '{$request['search']['search_keyphrase']}'
                                AND config_name LIKE '{$key}'";
                        mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
                        //echo $sql."<br />";
                    }

                     if(($key=='meta_title'||$key=='meta_keywords'||$key=='meta_description')&&trim($value)==''&&$request['search']['search_keyphrase']!='default'){
                        $sql = "DELETE FROM site_config
                                WHERE search_keyphrase LIKE '{$request['search']['search_keyphrase']}' AND
                                config_name LIKE '{$key}'";
                        //echo $sql."<br />";
                        mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
                    }

                    if(($key=='meta_title_insert'||$key=='meta_keywords_insert'||$key=='meta_description_insert')&&trim($value)!=''){
                        
                        $config_name = str_replace("_insert","",$key);
                        $config_name = UCWords(str_replace("_"," ",$config_name));
                        $sql = "INSERT INTO site_config (config_name,search_keyphrase,config_value)
                                VALUES ('{$config_name}','{$request['search']['search_keyphrase']}','{$value}')";
                        //echo $sql."<br />";
                        mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
                    }
                }
                //$esql = mysql_query($sql) or die("MySQL Error SQL: $sql<br />\nMySQL Error: ".mysql_error());
                $errors['error'] = 'false';
                $errors['msg'] = 'Category edited successfully.';
                return $errors;
        }


        function updateHotelMetaFields($request){
                $errors = array();

                foreach($request['search'] as $key => $value){
                    if(($key=='meta_title'||$key=='meta_keywords'||$key=='meta_description')&&$value!=''){
                        $sql = "UPDATE hotel_config SET config_value = '".$request['search'][$key]."'
                                WHERE hotel_id LIKE '{$request['search']['hotel_id']}'
                                AND config_name LIKE '{$key}'";
                        mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
                        //echo $sql."<br />";
                    }

                     if(($key=='meta_title'||$key=='meta_keywords'||$key=='meta_description')&&trim($value)==''&&$request['search']['search_keyphrase']!='default'){
                        $sql = "DELETE FROM hotel_config
                                WHERE hotel_id LIKE '{$request['search']['hotel_id']}' AND
                                config_name LIKE '{$key}'";
                        //echo $sql."<br />";
                        mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
                    }

                    if(($key=='meta_title_insert'||$key=='meta_keywords_insert'||$key=='meta_description_insert')&&trim($value)!=''){

                        $config_name = str_replace("_insert","",$key);
                        $config_name = UCWords(str_replace("_"," ",$config_name));
                        $sql = "INSERT INTO hotel_config (config_name,hotel_id,config_value)
                                VALUES ('{$config_name}','{$request['search']['hotel_id']}','{$value}')";
                        //echo $sql."<br />";
                        mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
                    }
                }
                //$esql = mysql_query($sql) or die("MySQL Error SQL: $sql<br />\nMySQL Error: ".mysql_error());
                $errors['error'] = 'false';
                $errors['msg'] = 'Category edited successfully.';
                return $errors;
        }

        

        function deleteMetaField($request){
                $errors = array();
                $sql = "DELETE FROM site_config WHERE search_keyphrase LIKE '{$request['search']['search_keyphrase']}'";
                $esql = mysql_query($sql) or die("MySQL Error SQL: $sql<br />\nMySQL Error: ".mysql_error());
                $errors['error'] = 'false';
                $errors['msg'] = 'Meta details deleted successfully.';
                return $errors;
        }


        function deleteHotelMetaField($request){
                $errors = array();
                $sql = "DELETE FROM hotel_config WHERE hotel_id LIKE '{$request['search']['hotel_id']}'";
                $esql = mysql_query($sql) or die("MySQL Error SQL: $sql<br />\nMySQL Error: ".mysql_error());
                $errors['error'] = 'false';
                $errors['msg'] = 'Meta details deleted successfully.';
                return $errors;
        }


        function checkErrorsMeta($request){
                    $errors = array();
                    $errors['error'] = false;
                    if($request['search']['search_keyphrase']==''){
                        $errors['search_keyphrase'] = 'required';
                        $errors['error'] = true;
                        $errors['msg'] = 'Search Keyphrase is missing';
                    }

                    if($request['search']['meta_title']==''&&$request['search']['meta_keywords']==''&&$request['search']['meta_description']==''){
                        $errors['meta_title'] = 'required';
                        $errors['meta_keywords'] = 'required';
                        $errors['meta_description'] = 'required';
                        $errors['error'] = true;
                        $errors['msg'] = 'At least one config option is required';
                    }
                    
                    if($errors['error']==false){
                            if($request['search']['meta_title']!=''){
                                $sql = "SELECT * FROM site_config
                                        WHERE search_keyphrase LIKE '{$request['search']['search_keyphrase']}'
                                        AND config_name LIKE 'Meta Title'";
                                $esql = mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
                                $n = mysql_num_rows($esql);
                                    if($n>0){
                                        $errors['meta_title'] = 'duplicate';
                                        $errors['error'] = true;
                                        $errors['msg'] = 'This meta field already exists';
                                    }
                            }


                            if($request['search']['meta_description']!=''){
                                $sql = "SELECT * FROM site_config
                                        WHERE search_keyphrase LIKE '{$request['search']['search_keyphrase']}'
                                        AND config_name LIKE 'Meta Description'";
                                $esql = mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
                                $n = mysql_num_rows($esql);
                                    if($n>0){
                                        $errors['meta_description'] = 'duplicate';
                                        $errors['error'] = true;
                                        $errors['msg'] = 'This meta field already exists';
                                    }
                            }

                            if($request['search']['meta_keywords']!=''){
                                $sql = "SELECT * FROM site_config
                                        WHERE search_keyphrase LIKE '{$request['search']['search_keyphrase']}'
                                        AND config_name LIKE 'Meta Keywords'";
                                $esql = mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
                                $n = mysql_num_rows($esql);
                                    if($n>0){
                                        $errors['meta_keywords'] = 'duplicate';
                                        $errors['error'] = true;
                                        $errors['msg'] = 'This meta field already exists';
                                    }
                            }

                    }



                    
                return $errors;
        }

        function checkErrorsHotelMeta($request){
                    $errors = array();
                    $errors['error'] = false;
                    

                    if($request['search']['meta_title']==''&&$request['search']['meta_keywords']==''&&$request['search']['meta_description']==''){
                        $errors['meta_title'] = 'required';
                        $errors['meta_keywords'] = 'required';
                        $errors['meta_description'] = 'required';
                        $errors['error'] = true;
                        $errors['msg'] = 'At least one config option is required';
                    }

                    if($errors['error']==false){
                            if($request['search']['meta_title']!=''){
                                $sql = "SELECT * FROM hotel_config
                                        WHERE hotel_id LIKE '{$request['search']['hotel_id']}'
                                        AND config_name LIKE 'Meta Title'";
                                $esql = mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
                                $n = mysql_num_rows($esql);
                                    if($n>0){
                                        $errors['meta_title'] = 'duplicate';
                                        $errors['error'] = true;
                                        $errors['msg'] = 'This meta field already exists';
                                    }
                            }


                            if($request['search']['meta_description']!=''){
                                $sql = "SELECT * FROM hotel_config
                                        WHERE hotel_id LIKE '{$request['search']['hotel_id']}'
                                        AND config_name LIKE 'Meta Description'";
                                $esql = mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
                                $n = mysql_num_rows($esql);
                                    if($n>0){
                                        $errors['meta_description'] = 'duplicate';
                                        $errors['error'] = true;
                                        $errors['msg'] = 'This meta field already exists';
                                    }
                            }

                            if($request['search']['meta_keywords']!=''){
                                $sql = "SELECT * FROM hotel_config
                                        WHERE hotel_id LIKE '{$request['search']['hotel_id']}'
                                        AND config_name LIKE 'Meta Keywords'";
                                $esql = mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
                                $n = mysql_num_rows($esql);
                                    if($n>0){
                                        $errors['meta_keywords'] = 'duplicate';
                                        $errors['error'] = true;
                                        $errors['msg'] = 'This meta field already exists';
                                    }
                            }

                    }




                return $errors;
        }

        function createMetaInformation($request){
            $response = array();
            //var_dump($request);
                if(trim($request['search']['searchTerm'])==''){
                    $request['search']['searchTerm'] = "Home";
                }
            $sql = "SELECT * FROM site_config WHERE search_keyphrase LIKE '{$request['search']['searchTerm']}' OR search_keyphrase LIKE 'default'";
            //echo $sql;
            $esql = mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
            while($row=mysql_fetch_array($esql)){
                if($row['config_name']=='Meta Title'&&$row['search_keyphrase']=='default'){
                    $response['meta']['default']['meta_title'] = $row['config_value'];
                }

                if($row['config_name']=='Meta Keywords'&&$row['search_keyphrase']=='default'){
                    $response['meta']['default']['meta_keywords'] = $row['config_value'];
                }

                if($row['config_name']=='Meta Description'&&$row['search_keyphrase']=='default'){
                    $response['meta']['default']['meta_description'] = $row['config_value'];
                }

                $search = $request['search']['searchTerm'];

                if($row['config_name']=='Meta Title'&&$row['search_keyphrase']!='default'){
                    $response['meta'][$search]['meta_title'] = $row['config_value'];
                }

                if($row['config_name']=='Meta Keywords'&&$row['search_keyphrase']!='default'){
                    $response['meta'][$search]['meta_keywords'] = $row['config_value'];
                }

                if($row['config_name']=='Meta Description'&&$row['search_keyphrase']!='default'){
                    $response['meta'][$search]['meta_description'] = $row['config_value'];
                }
            }

            return $response;
        }

        function createHotelMetaInformation($request){
            $response = array();
            //var_dump($request);
                if(trim($request['search']['hotel_id'])==''){
                    $request['search']['hotel_id'] = "Home";
                }
            $sql = "SELECT * FROM hotel_config WHERE hotel_id LIKE '{$request['search']['hotel_id']}' OR hotel_id = 0";
            //echo $sql;
            $esql = mysql_query($sql) or die("MySQL Error SQL: $sql<br />MySQL Error: ".mysql_error());
            while($row=mysql_fetch_array($esql)){
                if($row['config_name']=='Meta Title'&&$row['hotel_id']==0){
                    $response['meta'][0]['meta_title'] = $row['config_value'];
                }

                if($row['config_name']=='Meta Keywords'&&$row['hotel_id']==0){
                    $response['meta'][0]['meta_keywords'] = $row['config_value'];
                }

                if($row['config_name']=='Meta Description'&&$row['hotel_id']==0){
                    $response['meta'][0]['meta_description'] = $row['config_value'];
                }

                $search = $request['search']['hotel_id'];

                if($row['config_name']=='Meta Title'&&$row['hotel_id']!=0){
                    $response['meta'][$search]['meta_title'] = $row['config_value'];
                }

                if($row['config_name']=='Meta Keywords'&&$row['hotel_id']!=0){
                    $response['meta'][$search]['meta_keywords'] = $row['config_value'];
                }

                if($row['config_name']=='Meta Description'&&$row['hotel_id']!=0){
                    $response['meta'][$search]['meta_description'] = $row['config_value'];
                }
            }

            return $response;
        }
        

}
?>
