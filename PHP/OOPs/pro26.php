<?php
    /*
        PHP - Overriding Inherited Methods
        Inherited methods can be overridden by redefining the methods (use the same name) in the child class.

        method overriding occurs when a subclass (child class) has the same method as the parent class. In other words, method overriding occurs when a subclass provides a particular implementation of a method declared by one of its parent classes.
    */ 

    class Bike{
        public function maxSpeed(){
            echo "<hr> As per Bikes";
        }
    }
    
    class Splendor extends Bike{
        public function maxSpeed(){
            echo "<hr> 80 KM/H";
        }
    }

    class KTM extends Bike{
        public function maxSpeed(){
            echo "<hr> 180 KM/H";
        }
    }

    $splendor = new Splendor();
    $ktm = new KTM();

    $splendor->maxSpeed();
    $ktm->maxSpeed();
?>