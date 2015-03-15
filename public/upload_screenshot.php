<?php
    require("../includes/config.php");
    ############ Configuration ##############
    $thumb_square_size 		= 200; //Thumbnails will be cropped to 200x200 pixels
    $max_image_size 		= 500; //Maximum image size (height and width)
    $thumb_prefix			= "thumb_"; //Normal thumb Prefix
    $destination_folder		= '/home/jharvard/vhosts/final_project/templates/uploaded_images/'; //upload directory ends with / (slash)
    ##########################################

    //continue only if $_POST is set and it is a Ajax request
    if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

	    // check $_FILES['ImageFile'] not empty
	    if(!isset($_FILES['image_file']) || !is_uploaded_file($_FILES['image_file']['tmp_name'])){
			    die('Image file is Missing!'); // output error when above checks fail.
	    }
	
	    //uploaded file info we need to proceed
	    $image_name = $_FILES['image_file']['name']; //file name
	    $image_size = $_FILES['image_file']['size']; //file size
	    $image_temp = $_FILES['image_file']['tmp_name']; //file temp

	    $image_size_info 	= getimagesize($image_temp); //get image size
	
	    if($image_size_info){
		    $image_width 		= $image_size_info[0]; //image width
		    $image_height 		= $image_size_info[1]; //image height
		    $image_type 		= $image_size_info['mime']; //image type
	    }else{
		    die("Make sure image file is valid!");
	    }

	    //switch statement below checks allowed image type 
	    //as well as creates new image from given file 
	    switch($image_type){
		    case 'image/png':
			    $image_res =  imagecreatefrompng($image_temp); break;
		    case 'image/gif':
			    $image_res =  imagecreatefromgif($image_temp); break;			
		    case 'image/jpeg': case 'image/pjpeg':
			    $image_res = imagecreatefromjpeg($image_temp); break;
		    default:
			    $image_res = false;
	    }

	    if($image_res){
		    //Get file extension and name to construct new file name 
		    $image_info = pathinfo($image_name);
		    $image_extension = strtolower($image_info["extension"]); //image extension
		    $image_name_only = strtolower($image_info["filename"]);//file name only, no extension
		
		    //create a random name for new image (Eg: fileName_293749.jpg) ;
		    $new_file_name = $image_name_only. '_' .  rand(0, 9999999999) . '.' . $image_extension;
		
		    if(move_uploaded_file($image_temp, $destination_folder.$new_file_name))
			{			    			    
				return true;
			}
		    else
		    {
			    echo "Fail upload folder with read access.";
			}    

	
	        imagedestroy($image_res); //freeup memory
	    }
    }


    ##### Saves image resource to file ##### 
    function save_image($source, $image_type, $destination_folder){
	    switch(strtolower($image_type)){//determine mime type
		    case 'image/png': 
			    imagepng($source, $destination_folder); return true; //save png file
			    break;
		    case 'image/gif': 
			    imagegif($source, $destination_folder); return true; //save gif file
			    break;          
		    case 'image/jpeg': case 'image/pjpeg': 
			    imagejpeg($source, $destination_folder); return true; //save jpeg file
			    break;
		    default: return false;
	    }
    }
    
    
?>    
