<?php
    /*
        access modifier             Same Class      Child Class         Object

        Private                     Yes             No                  No
        Protected                   Yes             Yes                 No
        Public                      Yes             Yes                 Yes

        default access modifier (public)
    */ 

    class Student{
        private $roll, $fname,  $lname;
        
        function __construct($roll, $fname, $lname){
            $this->roll = $roll;
            $this->fname = $fname;
            $this->lname = $lname;
        }

        function caller(){
            $this->printData();
        }

        function printData(){
            echo "<hr> Welcome ".$this->fname." ".$this->lname." Your Roll No. is ".$this->roll;
        }
    }

    $obj1 = new Student(111, "Rohan", "Dasadiya");
    $obj1->caller();
    $obj1->printData();
?>