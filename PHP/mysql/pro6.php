<?php
    /*
        A database table has its own unique name and consists of columns and rows.
        Create a MySQL Table Using MySQLi and PDO
        The CREATE TABLE statement is used to create a table in MySQL.

        with exception handling
    */ 

    // create required variables
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    try{
        // create connection with MySql Server
        $connection = new mysqli($hostname, $username, $password, $database);

        // check for connection error 
        if($connection->connect_error){
            throw new Exception("Connection Filed ".$connection->connect_error);
        }else{
            // query for table create
            $sqlquery = "create table students (roll int primary key auto_increment, fname varchar(20) not null, lname varchar(20) not null, city varchar(20) not null, email varchar(64) not null, phone varchar(20) not null, gender varchar(10) not null, created_at timestamp default current_timestamp)";

            // execute a query
            if($connection->query($sqlquery) === true){
                echo "<hr> Table Created";
            }else{
                throw new Exception("Error while creating new Table");
            }
        }
    }catch(Exception $err){
        echo "<hr>Error is ".$err->getMessage();
    }finally{
        $connection->close();
    }
?>