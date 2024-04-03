<?php
    /*
        PHP - The $this Keyword The $this keyword refers to the current object, and is only available inside methods. Look at the following example:
    */

class Fruit{
    public $name;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}


    $obj1 = new Fruit();
    $obj1->setName("Apple");
    echo $obj1->getName();

    echo "<hr> Instance of : ";
     var_dump($obj1 instanceof Fruit);
?>