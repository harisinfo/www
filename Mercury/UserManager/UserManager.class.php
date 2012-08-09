<?php
class UserManager {
    
    
    function uploadImage($login, $request, $post_request = null){
        $response['error'] = true;
        $error_check = $this->checkFile($request);
        

            if($error_check == 1){
                return $response;
            }
            

        if($login['user_type']=='USER'){
            $this->uploadHairStyle($login,$request);
            $response['error'] = false;
            
        }

        if($login['user_type']=='SALOON'&&isset($post_request)&&$post_request!=null){
        	
            if($post_request['search']['upload_type']=='profile'){
                $this->uploadSaloonImage($login,$request,$post_request);
                $response['error'] = false;
            }

            if($post_request['search']['upload_type']=='employee'){
                $this->uploadEmployeeImage($login,$request,$post_request);
                $response['error'] = false;
            }
            
            if($post_request['search']['upload_type']=='special_offer'){
            	
                $this->uploadSpecialOffer($login,$request,$post_request);
                $response['error'] = false;
            }
            
        }/*else{
            $response['error'] = true;
        }*/
        

	return $response;
    }

    function checkFile($request){
        global $allowed_files;
        $error = false;

        $array_file_parts = explode('.',$request['image_file']['name']);

        if(count($array_file_parts)!=2){
            $error = true;
        }

        
        $exists = in_array($array_file_parts[1], $allowed_files);

        if($exists!=1){
            $error = true;
        }

        return $error;
    }

    function uploadHairStyle($login,$request){
        $response = NULL;
        $date = date('Y-m-d H:i:s', strtotime("Now"));

        $response = $this->uploadUserImage($request);

            if($response != null){
                $sql = "INSERT INTO user_hairstyle (upload_date, user_id, hairstyle_upload_image, is_confirmed, is_primary) VALUES " .
                       " ('{$date}','{$login['user_id']}', '{$response}','1','1')";

                mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
            }
    }

    function uploadSaloonImage($login,$request,$post_request){
        $error = 'true';
        if($this->checkMaxSaloonImages($login)=='true'){
            $response = $this->uploadUserImage($request);

            if($response != null){
                $sql = "INSERT INTO saloon_image (saloon_id, saloon_upload_image, is_primary) VALUES " .
                       " ('{$login['saloon_id']}', '{$response}','0')";
                       
                mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
                
            }
        }

        return $error;
    }
    
    function uploadSpecialOffer($login,$request,$post_request){
        $err_response = 'false';
        $response = $this->uploadUserImage($request);

            if($response != null){
                $sql = "UPDATE saloon SET special_offer = '{$response}' WHERE saloon_id = {$login['saloon_id']}";
				$esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
				$err_response = 'true';
            }
        

        return $err_response;
    }

    function uploadEmployeeImage($login,$request,$post_request){

    }

    function checkMaxSaloonImages($login){
        global $max_saloon_images;

        $response = 'false';

        $sql = "SELECT COUNT(saloon_image_id) AS total_count FROM saloon_image WHERE saloon_id = {$login['saloon_id']}";
        $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());

        $count = mysql_fetch_row($esql);

            if($count[0]>=$max_saloon_images){
                $response = 'false';
            }else{
                $response = 'true';
            }

        return $response;
    }

    /*function uploadUserImage($request){
        global $uploaded_images_dir;

        $array_file_parts = explode('.',$request['image_file']['name']);

		    $uploadedfile = $request['image_file']['tmp_name'];
		    $extension = $array_file_parts[1];
		
		    if($extension=="jpg" || $extension=="jpeg" ){
			     $uploadedfile = $_FILES['file']['tmp_name'];
			     $src = imagecreatefromjpeg($uploadedfile);
		    }
		    else if($extension=="png"){
			     $uploadedfile = $_FILES['file']['tmp_name'];
			     $src = imagecreatefrompng($uploadedfile);
		    }
		    else{
			     $src = imagecreatefromgif($uploadedfile);
		    }

        list($width,$height)= getimagesize($uploadedfile);
        
        echo "Old: " . $width . " " . $height . "<br />";
        
        $ratio = $width/$height;
        
        echo "Ratio: " . $ratio . "<br />";
        
        $new_height = IMAGE_HEIGHT;
        $new_width = $ratio * IMAGE_HEIGHT;
        
        echo $new_width . " " . $new_height;
        
		    $tmp = imagecreatetruecolor($new_width,$new_height);
		    
		    imagecopyresampled($tmp,$src,0,0,0,0,$new_width,$new_height, $width, $height);

		    $file_name = rand(2,10000) . rand(3, 1000) . rand(45,2034) .strtotime("Now") . "." .$array_file_parts[1];
        
        $target_path = $uploaded_images_dir . $file_name;
        
        imagejpeg($tmp,$target_path,100);
        
        echo $target_path;
        
        imagedestroy($src);
		    imagedestroy($tmp);


        if(move_uploaded_file($request['image_file']['tmp_name'], $target_path)) {
        
        } else{
            echo "There was an error uploading the file, please try again!";
            return NULL;
        }

        return $file_name;
    }*/
    
    
    function uploadUserImage($request){
      global $uploaded_images_dir;
      $array_file_parts = explode('.',$request['image_file']['name']);
    
      include_once('SimpleImage/SimpleImage.class.php');
      
      $image = new SimpleImage();
      $image->load($request['image_file']['tmp_name']);
      $image->resizeToHeight(IMAGE_HEIGHT);
      
      $file_name = rand(2,10000) . rand(3, 1000) . rand(45,2034) .strtotime("Now") . "." .$array_file_parts[1];
      $target_path = $uploaded_images_dir . $file_name;
      $image->save($target_path);
      
      return $file_name;
    } 

    function checkSaloonImages($request){
        
    }

    function setSaloonPrimaryImage($login,$request){
        $sql = "UPDATE saloon_image SET is_primary = 0 WHERE saloon_id = {$login['saloon_id']}";
        $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());

        $sql = "UPDATE saloon_image SET is_primary = 1 WHERE saloon_image_id = {$request['search']['makeprimary']}";
        $esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
    }
    
    function deleteImage($request){
    	global $uploaded_images_dir;
    	$target_image = $uploaded_images_dir . $request['search']['delete'];
		
		if(unlink($target_image) === TRUE){
			$sql = "DELETE FROM saloon_image WHERE saloon_upload_image  = '{$request['search']['delete']}'";
        	$esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
        	return 'success';
		}else{
			return 'failure';
		}
		
    }
    
    
    function deleteImageHairStyle($request){
    	global $uploaded_images_dir;
    	$target_image = $uploaded_images_dir . $request['search']['delete'];
		
		if(unlink($target_image) === TRUE){
			$sql = "DELETE FROM user_hairstyle WHERE hairstyle_upload_image  = '{$request['search']['delete']}'";
        	$esql = mysql_query($sql) or die("MySQL Error: $sql<br />MySQL Error No: ".mysql_error());
        	return 'success';
		}else{
			return 'failure';
		}
		
    }
    

}
?>
