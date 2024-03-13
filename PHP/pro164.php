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
            PHP Functions - Returning values
            To let a function return a value, use the return statement:
        */ 

        function findMax($ip1, $ip2 ,$ip3){
            $ans = 0;
            if($ip1 > $ip2 && $ip1 > $ip3){
                $ans = $ip1;
            }else if($ip2 > $ip1 && $ip2 > $ip3){
                $ans = $ip2;
            }else{
                $ans = $ip3;
            }

            return $ans;
        }
        
        $answer = findMax(123, 456, 789);
        echo "<hr>Maximum is $answer";
        echo "<hr>Maximum is ".findMax(11, 22, 33);
    ?>
</body>
</html>