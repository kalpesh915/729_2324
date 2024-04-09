<?php
    /*
        To call a static property from a child class, use the parent keyword inside the child class:
    */ 

    class College{
        public static $collegeName = "Darshan University";
    }

    class College1 extends College{
        public function __construct(){
            echo "Welcome to ".parent::$collegeName;
        }
    }

    $obj1 = new College1();
?>