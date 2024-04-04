<?php
    /*
        PHP - What is Inheritance?
        How constructor works in Inheritance
    */ 

    class ParentClass{
        public function __construct(){
            echo "<hr> Constructor of Parent Class Called";
        }
    }

    class ChildClass extends ParentClass{
        public function __construct(){
            parent::__construct(); // call constructor of parent class
            echo "<hr> Constructor of Child Class Called";
        }
    }
    

    $obj1 = new ChildClass();

    echo "<hr>";
    var_dump($obj1 instanceof ChildClass);

    echo "<hr>";
    var_dump($obj1 instanceof ParentClass);
?>