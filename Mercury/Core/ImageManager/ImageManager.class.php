<?php
/********************************************************
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk>		*
********************************************************/

define('WATERMARK_OVERLAY_IMAGE', 'watermark.png');
define('WATERMARK_OVERLAY_OPACITY', 50);
define('WATERMARK_OUTPUT_QUALITY', 90);
define('UPLOADED_IMAGE_DESTINATION', 'originals/');
define('PROCESSED_IMAGE_DESTINATION', 'images/');


class ImageManager
{    
	private $white_bg_png = 'white.png';
	private $white_bg_jpg = 'white.jpg';
	private $white_bg_gif = 'white.gif';
	private $resize_normal = 240;
	private $resize_small = 160;
	private $resize_xsmall = 120;
	
	public function createImage($request)
	{
		
		$im = @imagecreatetruecolor($request['blank_image_size'], $request['blank_image_size']) 
				or die('Cannot Initialize new GD image stream');
		
		$backgroundColor = imagecolorallocate($im, 0, 0, 0);
		imagefill($im, 0, 0, $backgroundColor);		
		
		$file = __PRODUCT_IMAGES_DIR_PATH . "{$request['image_id']}-normal." . $request['image_type'];		
		$file_ori = __PRODUCT_IMAGES_DIR_PATH . "{$request['image_id']}." . $request['image_type'];		
		
		imagejpeg($im, $file);
		
		imagecopymerge($file, $file_ori, 0, 0, 0, 0, 50, 50, 100);
		
		imagejpeg($im, $file);
		
		echo "Created {$file} .... <br />";
	}
	
	public function create_watermark($source_file_path, $output_file_path)
	{
    	list($source_width, $source_height, $source_type) = getimagesize($source_file_path);
    	
    	if ($source_type === NULL) 
    	{
        	return false;
    	}
    	
    	switch ($source_type) 
    	{
        		case IMAGETYPE_GIF:
            		$source_gd_image = imagecreatefromgif($source_file_path);
            	break;
        		case IMAGETYPE_JPEG:
            		$source_gd_image = imagecreatefromjpeg($source_file_path);
            	break;
        		case IMAGETYPE_PNG:
            		$source_gd_image = imagecreatefrompng($source_file_path);
            	break;
        		default:
            		return false;
    	}
    	
    	$overlay_gd_image = imagecreatefrompng(WATERMARK_OVERLAY_IMAGE);
    	$overlay_width = imagesx($overlay_gd_image);
    	$overlay_height = imagesy($overlay_gd_image);
    	
    	imagecopymerge($source_gd_image, $overlay_gd_image, $source_width - $overlay_width, $source_height - $overlay_height, 0, 0, $overlay_width,
    		 			$overlay_height, WATERMARK_OVERLAY_OPACITY);
    		 			
    	imagejpeg($source_gd_image, $output_file_path, WATERMARK_OUTPUT_QUALITY);
    	imagedestroy($source_gd_image);
    	imagedestroy($overlay_gd_image);
	}
	
	function process_image_upload($Field)
	{
    	$temp_file_path = $_FILES[$Field]['tmp_name'];
    	$temp_file_name = $_FILES[$Field]['name'];
    	list(, , $temp_type) = getimagesize($temp_file_path);
    	if ($temp_type === NULL) 
    	{
        	return false;
    	}
    	
    	switch ($temp_type) 
    	{
        	case IMAGETYPE_GIF:
				break;
        	case IMAGETYPE_JPEG:
				break;
        	case IMAGETYPE_PNG:
            	break;
        	default:
            	return false;
    	}
    	
    	$uploaded_file_path = UPLOADED_IMAGE_DESTINATION . $temp_file_name;
    	$processed_file_path = PROCESSED_IMAGE_DESTINATION . preg_replace('/\\.[^\\.]+$/', '.jpg', $temp_file_name);
    	
    	move_uploaded_file($temp_file_path, $uploaded_file_path);
    	
    	$result = create_watermark($uploaded_file_path, $processed_file_path);
    	
    	if ($result === false) 
    	{
        	return false;
    	} 
    	else 
    	{
        	return array($uploaded_file_path, $processed_file_path);
    	}
	}


	   
}
