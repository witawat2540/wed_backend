<?php
//$temp = $_GET['temp'];

$servername = "localhost";
$username = "iot";
$password = "!Qazxsw2";
$dbname = "iot";

// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$val = $_GET['status'];
$sql = "SELECT * FROM status WHERE id = 1";
$objQuery = mysqli_query($conn,$sql);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	
    	
    $sqldoor = "SELECT * FROM Usagehistory WHERE id = ( SELECT MAX(id) FROM Usagehistory)";	
	$objQuerydoor = mysqli_query($conn,$sqldoor);	
    $door = mysqli_fetch_array($objQuerydoor,MYSQLI_ASSOC);	
    $name= $door['Door'];
    
    $sqliddoor = "SELECT * FROM Namedoor WHERE door = '".$name."'";	
	$objQueryiddoor = mysqli_query($conn,$sqliddoor);	
    $iddoor = mysqli_fetch_array($objQueryiddoor,MYSQLI_ASSOC);	
    $id= $iddoor['id'];

echo $id. $objResult['Status'] ;
?>