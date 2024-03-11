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
        Nested If
        You can have if statements inside if statements, this is called nested if statements.

        find maximum out of 3 values with use of ladder if
    */

        $ip1 = 100;
        $ip2 = 200;
        $ip3 = 300;


        if($ip1 > $ip2 && $ip1 > $ip3){
            $ans = $ip1;
        }else if($ip2 > $ip1 && $ip2 > $ip3){
            $ans = $ip2;
        }else{
            $ans = $ip3;
        }
        echo "<hr> Maximum is $ans";
    ?>
</body>

</html>