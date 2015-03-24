<?php
	require '_core/init.php';
	
	if(empty($_POST) === false)	{
		if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)=== false){
			$errors[]="Please enter a valid email address";
		}
	} else{
		$errors[]='No access';
	}

	if(empty($errors) == true):
		$title = "Upload files";
		require '_includes/site-wide/header.php';
		require '_includes/_forms/upload-form.php';
		require '_includes/site-wide/footer.php';
	else:
		$title = "Pileline";
		require '_includes/site-wide/header.php';
		require '_includes/_forms/email-entry-form.php';
		require '_includes/site-wide/footer.php';
	endif;
?>