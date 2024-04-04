<?php 
    /*
        inheritance class relationship should be (is a) / (has a)
    */ 

    class Packing{

    }

    class Fruit{

    }

    class Apple extends Fruit // IS A
    {
        public $box = null;

        public function __construct(){
            $box = new Packing();  // HAS A
        }
    }

    class Banana extends Fruit{
        
    }

    class Mango extends Fruit{
        
    }
?>