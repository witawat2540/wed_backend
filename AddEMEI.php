<?php 
header("content-type:text/javascript;charset=utf-8");
define('HOST','localhost'); 
define('USER','iot'); //username
define('PASS','!Qazxsw2'); //password
define('DB','iot'); // ชื่อ database ที่จะติดต่อ

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect'); //ต่อฐานข้อมูล

//$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect'); //ต่อฐานข้อมูล

mysqli_set_charset($con,"utf8");
        $Name = $_POST['name'];
        $Pass = $_POST['pass'];
        $Imei = $_POST['IMEI'];
        $val = "coesmartlock".$Pass;
        $coe = hash('sha512',$val);
    
    
    

        $sql  = "INSERT INTO  passdoor(namedoor,passdoor,IMEI) VALUES ('" . $Name . "','". $coe ."','". $Imei ."')";

        $r = mysqli_query($con,$sql);
        

	
    mysqli_close($con);


?>
