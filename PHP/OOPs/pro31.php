<?php
    /*
        Or, we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name, like here:
    */ 

    class ConstantDemo{
        const GREETINGS = "Welcome to world of OOP";

        public function msg(){
            echo "Called From msg() : ".self::GREETINGS;
        }
    }

    $obj1 = new ConstantDemo();
    $obj1->msg();
?>