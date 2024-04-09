<?php

    class Design{
        public static function pattern1(){
            echo "<hr>*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*<hr>";
        }
    }

    class Math1{
        public function Sum($ip1, $ip2){
            Design::pattern1();
            echo "Sum of $ip1 and $ip2 is ".($ip1 + $ip2);
        }

        public function Sub($ip1, $ip2){
            Design::pattern1();
            echo "Sub of $ip1 and $ip2 is ".($ip1 - $ip2);
        }
    }

    class Math2 extends Math1{
        public function Max($ip1, $ip2){
            Design::pattern1();
            echo "Max of $ip1 and $ip2 is ".($ip1 > $ip2 ? $ip1 : $ip2);
        }

        public function Min($ip1, $ip2){
            Design::pattern1();
            echo "Min of $ip1 and $ip2 is ".($ip1 < $ip2 ? $ip1 : $ip2);
        }
    }

    $obj1 = new Math2();

    $obj1->Sum(111, 22);
    $obj1->Sub(111, 22);
    $obj1->Max(111, 22);
    $obj1->Min(111, 22);
?>