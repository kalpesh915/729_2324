<?php
    /*
        PHP - Looping Through the Values You can also loop through the values with a foreach() loop:
    */

    $jsonString = '{"roll":1,"fname":"Rohan","lname":"Dasadiya","city":"rajkot","gender":"Male"}';
    $students = json_decode($jsonString, true);

    foreach($students as $key => $value){
        echo "<hr> $key is $value";
    }
?>