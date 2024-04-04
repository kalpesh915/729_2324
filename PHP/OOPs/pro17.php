<?php
    /*
        PHP - What is Inheritance?
        Inheritance in OOP = When a class derives from another class.
        The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
        An inherited class is defined by using the extends keyword.

        example of Single level Inheritance
    */ 

    // Parent Class
    class Math1{
        public function Sum($ip1, $ip2){
            echo "<hr> Sum of $ip1 and $ip2 is : ".($ip1 + $ip2);
        }
        public function Sub($ip1, $ip2){
            echo "<hr> Sub of $ip1 and $ip2 is : ".($ip1 - $ip2);
        }
    }

    /// Child Class
    class Math2 extends Math1{
        public function Div($ip1, $ip2){
            echo "<hr> Div of $ip1 and $ip2 is : ".($ip1 / $ip2);
        }
        public function Mul($ip1, $ip2){
            echo "<hr> Mul of $ip1 and $ip2 is : ".($ip1 * $ip2);
        }
    }

    $obj1 = new Math2();

    $obj1->Sum(111, 22);
    $obj1->Sub(111, 22);
    $obj1->Mul(111, 22);
    $obj1->Div(111, 22);
?>