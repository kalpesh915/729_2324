<?php
    /*
        abstract class provide abstraction from 0 to 100%
        while interface provide abstraction 100%
    */ 

    abstract class ParentClass{
        // abstract method
        abstract protected function prefix($name);
        
        // non abstract method
        public function msg(){
            echo "Good Evening";
        }
    }

    class ChildClass extends ParentClass{
        public function prefix($name)  {
            if($name == "bhavdeep"){
                $prefix = "Mr.";
            }else if($name == "bhavya"){
                $prefix = "Miss";
            }else{
                $prefix = "";
            }

            return $this->msg()." {$prefix} {$name}";;
        }
    }

    $obj1 = new ChildClass();

    echo $obj1->prefix("bhavdeep");
    echo "<hr>";
    echo $obj1->prefix("bhavya");
?>