<?php
    /*
        PHP Exceptions
        What is an Exception?
        An exception is an object that describes an error or unexpected behaviour of a PHP script.Exceptions are thrown by many PHP functions and classes. User defined functions and classes can also throw exceptions. Exceptions are a good way to stop a function when it comes across data that it cannot use.
    */ 

    echo "<hr> Before Division";
    //echo "<hr>". (100 / 10);
    echo "<hr>". (100 / 0);
    echo "<hr> After Division";
?>