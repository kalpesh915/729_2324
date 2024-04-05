<?php
    /*
        PHP - Overriding Inherited Methods
        Inherited methods can be overridden by redefining the methods (use the same name) in the child class.

        method overriding occurs when a subclass (child class) has the same method as the parent class. In other words, method overriding occurs when a subclass provides a particular implementation of a method declared by one of its parent classes.
    */ 
    
    class ParentClass{
        public function greetings(){
            echo "<hr>Good Morning<hr>";
        }
    }

    class ChildClass extends ParentClass{
        // over rided method
        public function greetings(){
            echo "<hr> Good Day";
        }
    }

    $obj1 = new ChildClass();
    $obj1->greetings();
?>