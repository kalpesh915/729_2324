<?php
    /*

    */ 

    abstract class ParentClass{
        abstract protected function prefix($name);
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

            return "{$name} {$prefix}";;
        }
    }

    $obj1 = new ChildClass();

    echo $obj1->prefix("bhavdeep");
    echo "<hr>";
    echo $obj1->prefix("bhavya");
?>