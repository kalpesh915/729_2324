<?php
    /*
        PHP - json_decode()
        The json_decode() function is used to decode a JSON object into a PHP object or an associative array.
    */

    $jsonString = '{"roll":1,"fname":"Rohan","lname":"Dasadiya","city":"rajkot","gender":"Male"}';
    
    /// convert json string to object / array
    $students = json_decode($jsonString);

    print_r($students);

    echo "<hr>".$students->fname;
    //echo "<hr>".$students["fname"];
?>