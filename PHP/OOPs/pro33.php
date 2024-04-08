<?php
    /*
        When inheriting from an abstract class, the child class method must be defined with the same name, and the same or a less restricted access modifier. So, if the abstract method is defined as protected, the child class method must be defined as either protected or public, but not private. Also, the type and number of required arguments must be the same. However, the child classes may have optional arguments in addition.

    
        So, when a child class is inherited from an abstract class, we have the following rules:
        The child class method must be defined with the same name and it redeclares the parent abstract method
        The child class method must be defined with the same or a less restricted access modifier
        The number of required arguments must be the same. However, the child class may have optional arguments in addition
    */ 

    abstract class RBI{
        abstract public function deposit();
        abstract protected function ATM($location);
    }

    class SBI extends RBI{
        public function deposit(){
            echo "<hr> SBI Accept Deposit ";
        }

        public function ATM($location){
            echo "<hr> SBI Provides ATM";
        }
    }

    class NagrikBank extends RBI{
        public function deposit(){
            echo "<hr> Nagrik Bank Accept Deposit ";
        }

        public function ATM($location){
            echo "<hr> Nagrik Bank Provides ATM";
        }
    }
?>