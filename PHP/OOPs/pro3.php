<?php
    /*
        set values with method
    */ 

    class Fruit{
        public $name, $color, $price, $weight;
        
        // method
        public function setValues(){
            $this->name = "Pineapple";
            $this->color = "Yellow";
            $this->price = 50;
            $this->weight = 500;
        }
    }

    $obj1 = new Fruit();
    $obj2 = new Fruit();
    $obj3 = new Fruit();

    $obj1->setValues();
    $obj2->setValues();
    $obj3->setValues();

    echo "<hr> Name from First Object : ".$obj1->name;
    echo "<hr> Name from Second Object : ".$obj2->name;
    echo "<hr> Name from Third Object : ".$obj3->name;
?>