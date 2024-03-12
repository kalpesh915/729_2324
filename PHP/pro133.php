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
            The while loop does not run a specific number of times, but checks after each iteration if the condition is still true.

            The condition does not have to be a counter, it could be the status of an operation or any condition that evaluates to either true or false.

            find total digit in enetred number
        */ 

        $ip1 = 124;
        $ans = 0;

        while($ip1 >  0){
            $ans++;
            //$ip1 = round($ip1 / 10);
            $ip1 = floor($ip1 / 10);
            //$ip1 = (int)$ip1 / 10;
        }

        echo "<hr> Total Digits are $ans";
    ?>
</body>
</html>