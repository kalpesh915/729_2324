<?php
    /*
        A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::):
    */ 

    class Example{
        public static function greetings(){
            echo "<hr> Good Morning";
        }

        public function  Caller() {
            //$this->greetings();
            self::greetings();
        }
    }

    $obj1 = new Example();
    $obj1->Caller();
?>