<?php
	



function thread_list($email){
	$query = "SELECT SL_NO FROM `".ENTRY_TABLE."` WHERE email = '$email' ORDER BY LAST_MODIFIED_TIME DESC";
	$data = mysql_query($query);
	if(mysql_num_rows($data)){
		while($thread_data = mysql_fetch_assoc($data)){
			$thread_ids[] = $thread_data['SL_NO'];
		}

	}else{
		$thread_ids = 0;
	}
	return $thread_ids;
}


function update_thread_data($update_data,$sl_no){
	$sl_no= (int)$sl_no;
	$update = array();
	foreach($update_data as $field=>$data){
		$update[] ='`'.$field.'` = "'.$data.'"';
	}
	$qurey = "UPDATE `".ENTRY_TABLE."` SET ".implode(',',$update)." WHERE `SL_NO`=".$user_id;
	mysql_query($qurey);
}

function thread_data($data,$key = "SL_NO"){
	$data = sanatize($data);
	$key = sanatize($key);
	$query = "SELECT * from ".ENTRY_TABLE." WHERE $key ='$data'";
	$data =mysql_fetch_assoc( mysql_query($query));
	return $data;
}

function thread_exist($data,$key = "SL_NO"){
	$data = sanatize($data);
	$key = sanatize($key);
	$query = "select count(SL_NO) from ".ENTRY_TABLE." WHERE $key ='$data' ";
	$qurrey = mysql_query($query);
	return (mysql_result($qurrey,0) == 1) ? true : false;
}

function register_thread($register_data){
	
	$fields ='`' . implode('`,`',array_keys($register_data)) . '`';
	$data = '\''.implode('\',\'',$register_data). '\'';
	
	$query="INSERT INTO ".ENTRY_TABLE." ($fields) VALUES($data);";
	mysql_query($query);

	$query = "SELECT LAST_INSERT_ID( )";
	$result = mysql_result(mysql_query($query),0);
	return $result;
}	

?>