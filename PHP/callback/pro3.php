<?php
    /*
        Callback Functions

        Example : Pass a callback to PHP's array_map() function to calculate the length of every string in an array:

        Use an anonymous function as a callback for PHP's array_map() function:
    */ 


    $strings = ["apple", "orange", "banana", "coconut", "pineapple", "kiwi", "lichi", "mango"];
    $length = array_map(function($tmp){ return strlen($tmp);}, $strings);

    print_r($length);
?>