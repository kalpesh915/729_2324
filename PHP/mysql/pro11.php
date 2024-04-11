<?php
    /*
        PHP MySQL Prepared Statements
        Prepared statements are very useful against SQL injections.
        
        Prepared Statements and Bound Parameters A prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.
        Prepared statements basically work like this:
        
        Prepare: An SQL statement template is created and sent to the database. Certain values are left unspecified, called parameters (labeled "?"). Example: INSERT INTO MyGuests VALUES(?, ?, ?)
        The database parses, compiles, and performs query optimization on the SQL statement template, and stores the result without executing it
        Execute: At a later time, the application binds the values to the parameters, and the database executes the statement. The application may execute the statement as many times as it wants with different values

        Compared to executing SQL statements directly, prepared statements have three main advantages:
        
        Prepared statements reduce parsing time as the preparation on the query is done only once (although the statement is executed multiple times)
        Bound parameters minimize bandwidth to the server as you need send only the parameters each time, and not the whole query
        Prepared statements are very useful against SQL injections, because parameter values, which are transmitted later using a different protocol, need not be correctly escaped. If the original statement template is not derived from external input, SQL injection cannot occur.
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    try{
        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            throw new Exception("Error while connecting with Server ".$connection->connect_error);
        }else{
            $statement = $connection->prepare("insert into students (fname, lname, city, state, phone, email, gender) values (?,?,?,?,?,?,?)");

            $statement->bind_param("sssssss", $fname, $lname, $city, $state, $phone, $email, $gender);

            $fname = "Rohan";
            $lname = "Dasadiya";
            $city = "Ahamdabad";
            $state = "Gujarat";
            $phone = "9988223344";
            $email = "rohan@yahoo.com";
            $gender = "male";

            if($statement->execute() === true){
                echo "<hr>New Student Created <hr>";
            }

            $statement->close();

        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }
?>