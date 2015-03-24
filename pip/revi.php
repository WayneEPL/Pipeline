<?php
$servername = "localhost";
$username = "soealumni";
$password = "alumnisoe";
$dbname = "pipeline";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $sql = "SELECT REVISION FROM requests WHERE SRN='".$_GET['srn']."' LIMIT 1 ";
$result = $conn->query($sql);
//echo var_dump($result);

if ($result->num_rows > 0) {
    // output data of each rowa
    while($row = $result->fetch_assoc()) {
        echo $row["REVISION"];//.",".$row["SL_NO"];
//        $delta = $row["SL_NO"];
    }
	if($_GET['rev']==="")
{}else{
    $sql = "UPDATE requests SET REVISION = ".$_GET['rev']."  WHERE SRN = '".$_GET['srn']."' ";
	$result = $conn->query($sql);
}
} 
else {
    echo "NULL";
}

$conn->close();
?>
