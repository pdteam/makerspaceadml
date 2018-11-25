<?php
	//Allow Headers
	header('Access-Control-Allow-Origin: *');
	$dirname = getcwd()."uploads/"; 
	mkdir ($dirname, 0777, true);
	$new_image_name = strtolower($_FILES['file']['name']);
    move_uploaded_file($_FILES["file"]["tmp_name"], $dirname.$new_image_name);
?>