<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("<hr>Connection Failed ".$connection->connect_error);
    }
?>