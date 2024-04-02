<?php
    /*
        Callback Functions

        Example : Pass a callback to PHP's array_map() function to calculate the length of every string in an array:

        in the below example callback function called for every element of our array
    */ 

    function findLength($tmp){
        return strlen($tmp);
    }

    $strings = ["apple", "orange", "banana", "coconut", "pineapple", "kiwi", "lichi", "mango"];
    $length = array_map("findLength", $strings);

    print_r($length);
?>