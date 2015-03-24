<?php
$servername = "localhost";
$username = "soealumni";
$password = "alumnisoe";
$dbname = "pipeline";

	$connect_error="Sorry we\'ar experiencing down time";
	$connection=mysql_connect($servername, $username, $password) or die($connect_error);
	mysql_select_db($dbname)or die($connect_error); 

if(isset($_GET['name']) == true && isset($_GET['type']) == true){

	$name = trim($_GET['name']);
	$type = trim($_GET['type']);
	$sql = "SELECT COUNT(*) FROM signs WHERE NAME = '$name' and TYPE = '$type' ";

	//echo "$sql";
	$result = mysql_query($sql);

	if(mysql_result($result, 0) == 1)
		echo "TRUE";
	else
		echo "FALSE";

}else{
	echo "invalid Request";
}

?>