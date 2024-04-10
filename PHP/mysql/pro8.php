<?php
    /*
        PHP MySQL Insert Data
        Insert Data Into MySQL Using MySQLi and PDO
        After a database and a table have been created, we can start adding data in them.
        Here are some syntax rules to follow:
        The SQL query must be quoted in PHP, Numeric values must not be quoted, String values inside the SQL query must be quoted, The word NULL must not be quoted
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    try{
        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            throw new Exception("Error while Connecting Server ".$connection->connect_error);
        }else{
            $sqlquery = "insert into students (fname, lname, city, state, email, phone, gender) values ('udit', 'ghetiya', 'rajkot', 'gujarat', 'udit@gmail.com', '9988990099', 'male')";

            if($connection->query($sqlquery) === true){
                //echo "<hr> New Reocrd Created ";
                echo "<hr> New Reocrd Created with ".$connection->insert_id." Roll Number";
            }else{
                echo "<hr> Error while creting new Record";
            }
        }
    }catch(Exception $err){
        echo "<hr> Error is ".$err;
    }finally{
        $connection->close();
    }
?>