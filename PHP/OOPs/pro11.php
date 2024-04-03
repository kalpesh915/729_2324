<?php
    /*
        PHP - The __destruct Function
        A destructor is called when the object is destructed or the script is stopped or exited.
        If you create a __destruct() function, PHP will automatically call this function at the end of the script. Notice that the destruct function starts with two underscores (__)!
    */

    class Fruit{
        public $name, $color;
        
        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        public function printer(){
            echo "<hr> Fruit Name is ".$this->name." Color is ".$this->color;
        }

        // Tip: As constructors and destructors helps reducing the amount of code, they are very useful!
        public function __destruct(){
            echo "<hr> Destructor Called";
        }
    }


    $obj1 = new Fruit("Apple", "Red");
    $obj2 = new Fruit("Banana", "Yellow");
    $obj3 = new Fruit("Lichi", "Red");

    $obj1->printer();
    $obj2->printer();
    $obj3->printer();
?>