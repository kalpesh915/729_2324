<?php
    /*  
        HAS A Relationship
    */ 

    class Engine{

    }

    class Car{
        private $engine = null;

        public function __construct(){
            $engine = new Engine();
        }
    }

    class Bike{
        private $engine = null;

        public function __construct(){
            $engine = new Engine();
        }
    }

    class I10 extends Car{
        
    }

    class I20 extends Car{

    }

    class Verna extends Car{
        
    }

    class Creta extends Car{
        
    }

    class Santafee extends Car{
        
    }
?>