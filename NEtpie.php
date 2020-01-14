<?php

    $objCon = mysqli_connect("localhost","iot","!Qazxsw2","iot");
    $sqldoor = "SELECT * FROM Usagehistory WHERE id = ( SELECT MAX(id) FROM Usagehistory)";
	$objQuerydoor = mysqli_query($objCon,$sqldoor);
    $door = mysqli_fetch_array($objQuerydoor,MYSQLI_ASSOC);

$sql = "SELECT * FROM status WHERE id = 1";
$objQuery = mysqli_query($objCon,$sql);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    
    $last= "Last user: ".$door['username'].",Number of access:".$door['id'].",Active door: ".$door['Door']."";

    echo $last;
    echo"          ".",Status: ".$objResult['Status']."";
?>
