<?php
    /*
        A database table has its own unique name and consists of columns and rows.
        Create a MySQL Table Using MySQLi and PDO
        The CREATE TABLE statement is used to create a table in MySQL.
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("<hr> Error while Connecting Database Server ".$connection->connect_error);
    }else{
        $sqlquery = "create table students (roll int primary key auto_increment, fname varchar(20), lname varchar(20), city varchar(20), phone varchar(20), email varchar(64), gender varchar(10))";

        if($connection->query($sqlquery) === true){
            echo "<hr> Table Created";
        }else{
            echo "<hr> Error while creating Table";
        }
    }

    $connection->close();
?>