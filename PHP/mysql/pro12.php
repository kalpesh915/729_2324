<?php
    /*
        PHP MySQL Select Data
        Select Data From a MySQL Database
        The SELECT statement is used to select data from one or more tables:
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    try{
        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            throw new Exception("Error while connecting Database Server ".$connection->connect_error);
        }else{
            $sqlquery = "select * from students";

            $result = $connection->query($sqlquery);

            //print_r($result);

            // check how many rows receive in result
            if($result->num_rows > 0){
                // run loop and get one by one rows as associative array
                while($row = $result->fetch_assoc()){
                    echo "<hr> Welcome {$row['fname']} {$row['lname']} to {$row['city']} of {$row['state']} your roll no. is {$row['roll']} and contact details are {$row['email']} {$row['phone']}";
                    //print_r($row);
                }
            }else{
                echo "<hr> No Data Found in Table";
            }
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }
?>