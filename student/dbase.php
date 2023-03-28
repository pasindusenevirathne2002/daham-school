<?php

    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $db="dschool";
   

try{
    $bdd=new PDO("mysql:host=localhost;dbname=dschool",'root','');
} catch(Exception $e) {
    exit("Unable to connect to database.myiii mysql_error()");
}


?>