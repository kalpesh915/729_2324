<?php
    /*
        PHP - The __construct Function
        used to parameterized value for object property
    */

    class Fruit{
        public $name, $color;
        public function __construct($nm, $cl){
            $this->name = $nm;
            $this->color = $cl;
        }

        public function printer(){
            echo "<hr> Fruit Name is ".$this->name." Color is ".$this->color;
        }
    }


    $obj1 = new Fruit("Apple", "Red");
    $obj2 = new Fruit("Banana", "Yellow");
    $obj3 = new Fruit("Lichi", "Red");

    $obj1->printer();
    $obj2->printer();
    $obj3->printer();
?>