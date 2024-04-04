<?php
    /*
        PHP - Access Modifiers : Properties and methods can have access modifiers which control where they can be accessed.
        There are three access modifiers:
        public      -   the property or method can be accessed from everywhere. This is default
        protected   -   the property or method can be accessed within the class and by classes 
                        derived from that class
        private     -   the property or method can ONLY be accessed within the class


        access modifier             Same Class      Child Class         Object

        Private                     Yes             No                  No
        Protected                   Yes             Yes                 No
        Public                      Yes             Yes                 Yes

        * public access = accessible from anywhere
    */ 

    class Student{
        public $roll, $fname, $lname;
        public function __construct($roll, $fname, $lname){
            $this->roll = $roll;
            $this->fname = $fname;
            $this->lname = $lname;

            $this->printData();
        }

        public function printData(){
            echo "<hr> Welcome ".$this->fname." ".$this->lname." Your Roll No. is ".$this->roll;
        }
    }

    $obj1 = new Student(111, "Rohan", "Dasadiya");
    //$obj1->printData();

    echo "<hr> First Name is : ".$obj1->fname;

    $obj1->fname = "ROHAN";

    echo "<hr> First Name is : ".$obj1->fname;
?>