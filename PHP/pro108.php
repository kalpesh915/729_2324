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
        ?: 	Ternary 	
        $x = expr1 ? True : False 	Returns the value of $x.
        
        find maximum out of 3 with ternary operator
    */

        $ip1 = 100;
        $ip2 = 150;
        $ip3 = 500;

        $ans = ($ip1 > $ip2 ? ($ip1 > $ip3 ? $ip1 : $ip3) : ($ip2 > $ip3 ? $ip2 : $ip3));
        echo "<hr> Maximum is $ans";
    ?>
</body>

</html>