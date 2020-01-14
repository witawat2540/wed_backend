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
echo $objResult['Status'];
?>