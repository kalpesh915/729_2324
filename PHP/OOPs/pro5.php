<?php
/*
        set values with method
    */

class Fruit{
    public $name, $color, $price, $weight;

    public function setName($name){
        $this->name = $name;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function getName(){
        return $this->name;
    }

    public function getColor(){
        return $this->color;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getWeight(){
        return $this->weight;
    }
}


    $obj1 = new Fruit();
    $obj1->setName("Apple");
    echo $obj1->getName();
?>