<?php
    try{

        $db = new PDO('mysql:host=localhost; dbname=iot; ','iot','!Qazxsw2');
        $select = $db->query('SELECT*FROM Usagehistory ORDER BY id DESC');
        $door = $select->fetchAll();
        
        
    } catch (Exception $e){
            echo "can not connect to database";
            throw new Exception($e);

    }


?>