<?php
    /*
        PHP - The __construct Function
        A constructor allows you to initialize an object's properties upon creation of the object. If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
    */

    class Fruit{
        public function __construct(){
            echo "<hr>Constructor Called";
        }

        // Notice that the construct function starts with two underscores (__)!
    }


    $obj1 = new Fruit();
    $obj2 = new Fruit();
    $obj3 = new Fruit();
?>