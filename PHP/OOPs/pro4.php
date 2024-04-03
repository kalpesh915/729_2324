<?php
    /*
        set values with method
    */ 

    class Fruit{
        public $name, $color, $price, $weight;
        
        // method
        public function setValues($nm, $cl, $pr, $we){
            $this->name = $nm;
            $this->color = $cl;
            $this->price = $pr;
            $this->weight = $we;
        }

        public function printData(){
            echo "<hr>Fruit Name is ".$this->name." Color is ".$this->color." Price is ".$this->price." Weight is ".$this->weight;
        }
    }

    /*
        Define Objects : Classes are nothing without objects! We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values. Objects of a class are created using the new keyword.
    */ 

    $obj1 = new Fruit();
    $obj2 = new Fruit();
    $obj3 = new Fruit();

    $obj1->setValues("Mango", "Orange", "120", "1Kg");
    $obj2->setValues("Pineapple", "Yellow", "50", "1kg");
    $obj3->setValues("Watermalon", "Red", "20", "5kg");

    $obj1->printData();
    $obj2->printData();
    $obj3->printData();

?>