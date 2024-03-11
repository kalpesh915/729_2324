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

        PHP - The if...else Statement

        The if...else statement executes some code if a condition is true and another code if that condition is false.
        Syntax
        if (condition) {
            // code to be executed if condition is true;
        } else {
            // code to be executed if condition is false;
        }

    */

    $ip1 = 'K';
    $ip1 = strtolower($ip1);
    if ($ip1 == 'a' || $ip1 == 'e' || $ip1 == 'i' || $ip1 == 'o' || $ip1 == 'u') { 
        echo "<hr>True";
    }else{
        echo "<hr>False";
    }
    echo "<hr> Program Completed";
    ?>
</body>

</html>