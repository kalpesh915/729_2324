<?php
    /*
        PHP - Inheritance and the Protected Access Modifier
        In the previous chapter we learned that protected properties or methods can be accessed within the class and by classes derived from that class. What does that mean?

        access          same class      sub class       object
        proteced        yes             yes             no
    */

    class ParentClass{
        protected function greetings(){
            echo "<hr>Good Morning<hr>";
        }

        public function caller(){
            $this->greetings(); // call protected of parentclass
        }
    }

    $obj1 = new ParentClass();
    $obj1->caller(); // call public function
?>