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
        
        find maximum out of 2 with ternary operator
    */

        $ip1 = 100;
        $ip2 = 15;

        $ans = ($ip1 > $ip2 ? $ip1 : $ip2 );
        echo "<hr> Maximum is $ans";
    ?>
</body>

</html>