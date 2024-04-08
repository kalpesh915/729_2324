<?php
    /*
        PHP OOP - Abstract Classes
        PHP - What are Abstract Classes and Methods?
        Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
        An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
    */ 

    abstract class RBI{
        abstract public function deposit();
        abstract public function ATM();
    }

    class SBI extends RBI{
        public function deposit(){
            echo "<hr> SBI Accept Deposit ";
        }

        public function ATM(){
            echo "<hr> SBI Provides ATM";
        }
    }

    class NagrikBank extends RBI{
        public function deposit(){
            echo "<hr> Nagrik Bank Accept Deposit ";
        }

        public function ATM(){
            echo "<hr> Nagrik Bank Provides ATM";
        }
    }
?>