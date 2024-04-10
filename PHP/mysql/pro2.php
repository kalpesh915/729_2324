<?php

    // Example (MySQLi OOP)

    $hostname = "localhost";
    $username = "root";
    $password = "";


    $connection = new mysqli($hostname, $username, $password);

    if($connection->connect_error){
        echo "<hr>Connection Failed Due to ".$connection->connect_error;
    }else{
        echo "<hr>Connection Successfully";
    }

    $connection->close();
?>