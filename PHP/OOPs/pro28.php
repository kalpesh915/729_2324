<?php
    /*
        PHP - The final Keyword
        The final keyword can be used to prevent class inheritance or to prevent method overriding. 
        The following example shows how to prevent method overriding:
    */ 
    
    class ParentClass{
        final public function greetings(){
            echo "<hr>Good Morning<hr>";
        }
    }

    class ChildClass extends ParentClass{
        // cannot override greetings because method is mentioned as final 
        public function greetings(){
            echo "<hr> Good Day";
        }
    }

    $obj1 = new ChildClass();
    $obj1->greetings();
?>