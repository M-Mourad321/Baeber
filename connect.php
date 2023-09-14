<?php
try{
    $connect=new PDO ("mysql:host=localhost;dbname=barber","root","");
    
}catch(Exception $e){
    echo $e->getmessage();
    exit();
}

?>