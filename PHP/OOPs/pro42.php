<?php
    /*
        Static methods can also be called from methods in other classes. To do this, the static method should be public:
    */ 

    class ParentClass{
        public static function greetings(){
            echo "<hr> Good Morning";
        }
    }

    class ChildClass extends ParentClass{
        public function Caller(){
            //ParentClass::greetings();
            parent::greetings();
        }
    }

    $obj1 = new ChildClass();
    $obj1->Caller();
?>