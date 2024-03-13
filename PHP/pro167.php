<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            Variable Number of Arguments
        */ 

        function makeSum2($ip1, $ip2){
            $ans = $ip1 + $ip2;
            echo "<hr> Sum is $ans";
        }

        function makeSum3($ip1, $ip2, $ip3){
            $ans = $ip1 + $ip2 + $ip3;
            echo "<hr> Sum is $ans";
        }

        function makeSum4($ip1, $ip2, $ip3, $ip4){
            $ans = $ip1 + $ip2 + $ip3 + $ip4;
            echo "<hr> Sum is $ans";
        }

        function makeSum5($ip1, $ip2, $ip3, $ip4, $ip5){
            $ans = $ip1 + $ip2 + $ip3 + $ip4 + $ip5;
            echo "<hr> Sum is $ans";
        }

        makeSum2(11, 22);
        makeSum3(11, 22, 33);
        makeSum4(11, 22, 33, 44);
        makeSum5(11, 22, 33, 44, 55);
    ?>
</body>
</html>