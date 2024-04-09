<?php
    /*
        PHP OOP - Static Methods
        Static methods can be called directly - without creating an instance of the class first.Static methods are declared with the static keyword:
    */ 

    class Example{
        public static function greetings(){
            echo "<hr> Good Morning";
        }
    }

    /*
        $obj1 = new Example();
        $obj1->greetings();
    */

    // call static method
    Example::greetings();

    /*
        To access a static method use the class name, double colon (::), and the method name:
        Syntax = ClassName::staticMethod();
    */ 
?>