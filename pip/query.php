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

$sql = "SELECT * FROM upload_entry WHERE status = 0 LIMIT 1 ";
$result = $conn->query($sql);
//echo var_dump($result);

if ($result->num_rows > 0) {
    // output data of each rowa
    while($row = $result->fetch_assoc()) {
        echo $row["FILE_LOCATION"].",".$row["SL_NO"];
        $delta = $row["SL_NO"];
    }
    $sql = "UPDATE upload_entry SET STATUS = 1 WHERE SL_NO = '$delta' ";
	$result = $conn->query($sql);
} 
else {
    echo "NULL";
}

$conn->close();
?>