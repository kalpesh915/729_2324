<?php

    // Example (PDO : PHP Data Object)

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "729example";
    // dsn = data source name

    try {
        $connection = new PDO("mysql:host=$hostname; dbname=$database", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<hr> Connection Successfully";
    } catch (Exception $err) {
        echo "<hr> Error is ".$err;
    }

    /*
        Tip: A great benefit of PDO is that it has an exception class to handle any problems that may occur in our database queries. If an exception is thrown within the try{ } block, the script stops executing and flows directly to the first catch(){ } block.
    */ 

    $connection = null;
?>
