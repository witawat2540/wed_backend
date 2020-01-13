<?php

    $objCon = mysqli_connect("localhost","iot","!Qazxsw2","iot");
    $sqldoor = "SELECT * FROM Usagehistory WHERE id = ( SELECT MAX(id) FROM Usagehistory)";
	$objQuerydoor = mysqli_query($objCon,$sqldoor);
    $door = mysqli_fetch_array($objQuerydoor,MYSQLI_ASSOC);
    $cout= "Number of access".$door['id']."";
    $last= "Last user: ".$door['username']."";
?>

<script  type="text/javascript">
    var APPID= "WorkShopLED"; //enter your appid
    var KEY = "tjVAVjlbJHII6nq"; //enter your key
    var SECRET = "MgBnXJHN74Lm6ISZ3m3oogCSO"; //enter your secret
    var Topic = "/door"; //choose any topic name

  
    function PressButtonOff(){
        var url = 'https://api.netpie.io/topic/'+APPID+Topic+'?retain&auth=' +KEY+':'+SECRET;
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open('PUT',url,true);
        xmlHttp.send(<?php echo "'$cout'";?>);
        //window.alert(url); //for debugging purpose
    } 
    PressButtonOff();
    
</script>


