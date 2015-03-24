<?php
	require '_core/init.php';
	if(isset($_GET['application_id']) == true && empty($_GET['application_id']) == false){
		$application_id = mysql_real_escape_string(htmlentities($_GET['application_id']));
		if(thread_exist($application_id) == false)
			$errors[] = "Invalid Application ID";
		
		$thread_data = thread_data($application_id);
	}else
		$errors[] = "Invalid request";

	$title = "Application Details";
	require '_includes/site-wide/header.php';
	require '_includes/_forms/final-form.php';
	require '_includes/site-wide/footer.php';
?>