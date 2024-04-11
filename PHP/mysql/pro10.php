<?php
    /*
        PHP MySQL Insert Multiple Records
        Insert Multiple Records Into MySQL Using MySQLi and PDO Multiple SQL statements must be executed with the mysqli_multi_query() function.
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    try{
        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            throw new Exception("Error while Connecting with Server ".$connection->connect_error);
        }else{
            $sqlquery = "insert into students (fname, lname, city, state, phone, email, gender) values ('pandya', 'gaurang', 'rajkot', 'gujarat', '1122334455', 'gaurang@gmail.com', 'male'), ('sorathiya', 'bahvdeep', 'rajkot', 'gujarat', '1122334455', 'bhavdeep@gmail.com', 'male'), ('udit', 'ghetiya', 'rajkot', 'gujarat', '1122334455', 'udit@gmail.com', 'male'), ('rana', 'yograjsinh', 'rajkot', 'gujarat', '1122334455', 'yograjsinh@gmail.com', 'male'), ('rohan', 'dasadiya', 'rajkot', 'gujarat', '1122334455', 'rohan@gmail.com', 'male'), ('yadav', 'yagnik', 'rajkot', 'gujarat', '1122334455', 'yagnik@gmail.com', 'male'), ('adarsh', 'chavda', 'rajkot', 'gujarat', '1122334455', 'adarsh@gmail.com', 'male'), ('tushar', 'kadam', 'rajkot', 'gujarat', '1122334455', 'tushar@gmail.com', 'male'), ('yash', 'vaghela', 'rajkot', 'gujarat', '1122334455', 'yash@gmail.com', 'male'), ('parmar', 'jayrajsinh', 'rajkot', 'gujarat', '1122334455', 'jayrajsinh@gmail.com', 'male'); ";

            if($connection->multi_query($sqlquery) === true){
                echo "<hr>New Records are inserted";
            }else{
                echo "<hr> Error while inserting new Records";
            }
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }
?>