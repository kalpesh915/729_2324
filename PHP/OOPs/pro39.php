<?php
    /*
        PHP - What are Traits?
        PHP only supports single inheritance: a child class can inherit only from one single parent.
        So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
        Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
    */ 

    trait Math1{
        public function sum($ip1, $ip2){
            echo "<hr> Sum is ".($ip1 + $ip2);
        }

        public function sub($ip1, $ip2){
            echo "<hr> Sub is ".($ip1 - $ip2);
        }
    }

    trait Math2{
        public function div($ip1, $ip2){
            echo "<hr> Div is ".($ip1 / $ip2);
        }

        public function mul($ip1, $ip2){
            echo "<hr> Mul is ".($ip1 * $ip2);
        }
    }

    trait Math3{
        public function mod($ip1, $ip2){
            echo "<hr> Mod is ".($ip1 % $ip2);
        }
    }

    class Calculation{
        use Math1, Math2, Math3;
    }

    $obj1 = new Calculation();

    $obj1->sum(111, 22);
    $obj1->sub(111, 22);
    $obj1->mul(111, 22);
    $obj1->div(111, 22);
    $obj1->mod(111, 22);
?>