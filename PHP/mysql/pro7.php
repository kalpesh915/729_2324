<?php
    /*
       alter table
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
            $sqlquery = "alter table students add column state varchar(20)not null after city";

            // execute a query
            if($connection->query($sqlquery) === true){
                echo "<hr> Table Updated";
            }else{
                throw new Exception("Error while updating new Table");
            }
        }
    }catch(Exception $err){
        echo "<hr>Error is ".$err->getMessage();
    }finally{
        $connection->close();
    }
?>