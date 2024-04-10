<?php
    /*
        A database consists of one or more tables.
        You will need special CREATE privileges to create or to delete a MySQL database.
        Create a MySQL Database Using MySQLi and PDO
        The CREATE DATABASE statement is used to create a database in MySQL.
        The following examples create a database named "myDB":
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connection = new mysqli($hostname, $username, $password);

    if($connection->connect_error){
        die("<hr> Connection Filed ".$connection->connect_error);
    }else{
        // build query for create new database
        $sqlquery = "create database mydb";

        if($connection->query($sqlquery) === true){
            echo "<hr> Database Created";
        }else{
            echo "<hr> Error while creating new Database";
        }
    }

    $connection->close();
?>