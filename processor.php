<?php
	require '_core/init.php';
	if(isset($_POST) == true && empty($_POST) == false){
		$errors= array();

		if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)=== false){
			$errors[]="Please enter a valid email address";
		}
	    $file_name = $_FILES['image']['name'];
	    $file_size =$_FILES['image']['size'];
	    $file_tmp =$_FILES['image']['tmp_name'];
	    $file_type=$_FILES['image']['type'];   
	    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
	    $extensions = array("pdf","PDF"); 		
	    if(in_array($file_ext,$extensions )=== false){
	    	$errors[]="extension not allowed, please choose a PDF";
	    }
	    if($file_size > 5242880){
	    	$errors[]='File size grater than 5 MB';
	    }		
	    $file_name = md5(time().$file_name.$_POST['email']).$file_name;
	    if(empty($errors)==true){
	    	move_uploaded_file($file_tmp,"uploads/".$file_name);
	    }
	}else
		$errors[] = "Invalid request";

	if(empty($errors) == true):
		
		$register_data = array(
			'EMAIL' 			=> $_POST['email'],
			'FILE_LOCATION'		=> $file_name,
			'UPLOAD_TIME'		=> date("Y-m-d  H:i:s",time()) 
		);
		$last_id = register_thread($register_data);

		$locaton = "Location: view.php?application_id=$last_id&new";
		header($locaton);
		
	else:
		$title = "Pileline";
		require '_includes/site-wide/header.php';
		require '_includes/_forms/email-entry-form.php';
		require '_includes/site-wide/footer.php';
	endif;

?>