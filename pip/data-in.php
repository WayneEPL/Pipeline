<?php
$servername = "localhost";
$username = "soealumni";
$password = "alumnisoe";
$dbname = "pipeline";
date_default_timezone_set('GMT');

	$connect_error="Sorry we\'ar experiencing down time";
	$connection=mysql_connect($servername, $username, $password) or die($connect_error);
	mysql_select_db($dbname)or die($connect_error); 

if(isset($_GET['filename']) == true && isset($_GET['slno']) == true){

	$name = trim($_GET['filename']);
	$slno = trim($_GET['slno']);
	if(isset($_GET['srn']) == true )
		$srn = $_GET['srn'];
	else
		$srn = time();

	$time = date("Y-m-d  H:i:s",time());
	$sql = "INSERT into requests (`SRN`,`FILE_NAME`,`CREATE_TIME`) VALUES('$srn','".$srn.".pdf','$time') ";
	mysql_query($sql);
	echo "$srn";

	$query = "UPDATE upload_entry SET `SRN` = '$srn' WHERE `upload_entry`.`SL_NO` = '$slno'";
//	echo $query;
	mysql_query($query);

}else{
	echo "invalid Request";
}

?>
