<?php
    /*
        What is JSON?
        JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.
        Since the JSON format is a text-based format, it can easily be sent to and from a server, and used as a data format by any programming language.

        PHP and JSON
        PHP has some built-in functions to handle JSON. First, we will look at the following two functions: json_encode() , json_decode()

        PHP - json_encode()
        The json_encode() function is used to encode a value to JSON format

    */

    $student = array("Rajkot", "Surat", "Ahamdabad", "Baroda", "Bhuj");

    // associative array to JSON convert
    $jsonString = json_encode($student);

    echo $jsonString;
?>