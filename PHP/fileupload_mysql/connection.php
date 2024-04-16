<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("<hr> Unable to Connect with MySql Server ".$connection->connect_error);
    }
?>