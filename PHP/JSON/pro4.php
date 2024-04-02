<?php
    /*
        PHP - json_decode()
        The json_decode() function is used to decode a JSON object into a PHP object or an associative array.
    */

    $jsonString = '{"roll":1,"fname":"Rohan","lname":"Dasadiya","city":"rajkot","gender":"Male"}';
    
    /// The json_decode() function returns an object by default. The json_decode() function has a second parameter, and when set to true, JSON objects are decoded into associative arrays.
    $students = json_decode($jsonString, true);

    print_r($students);

    //echo "<hr>".$students->fname;
    echo "<hr>".$students["fname"];
?>