<?php
    /*
        PHP - The __construct Function
        used to set default value for object property
    */

    class Fruit{
        public $name, $color;
        public function __construct(){
            $this->name = "Apple";
            $this->color = "Red";
        }

        public function printer(){
            echo "<hr> Fruit Name is ".$this->name." Color is ".$this->color;
        }
    }


    $obj1 = new Fruit();
    $obj2 = new Fruit();
    $obj3 = new Fruit();

    $obj1->printer();
    $obj2->printer();
    $obj3->printer();
?>