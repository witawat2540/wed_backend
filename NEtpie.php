
<?php $data =$_GET['status'];?>
<script  type="text/javascript">
    var APPID= "WorkShopLED"; //enter your appid
    var KEY = "tjVAVjlbJHII6nq"; //enter your key
    var SECRET = "MgBnXJHN74Lm6ISZ3m3oogCSO"; //enter your secret
    var Topic = "/door"; //choose any topic name

  
    function PressButtonOff(){
        var url = 'https://api.netpie.io/topic/'+APPID+Topic+'?retain&auth=' +KEY+':'+SECRET;
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open('PUT',url,true);
        xmlHttp.send(<?php echo "'$data'";?>);
        //window.alert(url); //for debugging purpose
    } 
    function PressButtonOn(){
        var url = 'https://api.netpie.io/topic/'+APPID+Topic+'?retain&auth=' +KEY+':'+SECRET;
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open('PUT',url,true);
        xmlHttp.send('Lock');
        //window.alert(url); //for debugging purpose
    } 
    PressButtonOff();
    
</script>
