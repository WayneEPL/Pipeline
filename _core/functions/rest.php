<?php

function request_data($data,$key = "SL_NO"){
	$data = sanatize($data);
	$key = sanatize($key);
	$query = "SELECT * from ".REQUESTES_TABLE." WHERE $key ='$data'";
	$data =mysql_fetch_assoc( mysql_query($query));
	return $data;
}

?>

