<?php
    /*
        Callback Functions
        A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.
        Any existing function can be used as a callback function. To use a function as a callback function, pass a string containing the name of the function as the argument of another function:

        Example : without use of callback
    */ 

    $strings = ["apple", "orange", "banana", "coconut", "pineapple", "kiwi", "lichi", "mango"];
    $length = [];

    foreach($strings as $tmp){
        array_push($length, strlen($tmp));
    }

    print_r($length);
?>