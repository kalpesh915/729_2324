<?php
    /*
        PHP - More on Static Properties
        A class can have both static and non-static properties. A static property can be accessed from a method in the same class using the self keyword and double colon (::):
    */ 

    class College{
        public static $collegeName = "Darshan University";

        public function __construct(){
            //echo "Welcome to ".College::$collegeName;
            echo "Welcome to ".self::$collegeName;
        }
    }


    $obj1 = new College();
?>