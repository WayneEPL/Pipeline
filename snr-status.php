<?php
	require '_core/init.php';
	$title = "SRN STATUS";
	require '_includes/site-wide/header.php';
	
	if(isset($_POST) == true && empty($_POST) == false){

		if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)=== false){
			$errors[]="Please enter a valid email address";
		}

		if(empty($errors) == true){
			$thread_list = thread_list($_POST['email']);
			require '_includes/snr-details.php';
		}
	}
	else
		require '_includes/_forms/snr-status-form.php';

	require '_includes/site-wide/footer.php';
?>