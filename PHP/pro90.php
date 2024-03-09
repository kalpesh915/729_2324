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
        PHP Operators
        Operators are used to perform operations on variables and values.
        PHP divides the operators in the following groups:

        Arithmetic operators
        Assignment operators
        Comparison operators
        Increment/Decrement operators
        Logical operators
        String operators
        Array operators
        Conditional assignment operators

        PHP Arithmetic Operators

        The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.
    */
        $ip1 = 100;
        $ip2 = 3;

        echo "<hr> Sum ".($ip1 + $ip2);
        echo "<hr> Sub ".($ip1 - $ip2);
        echo "<hr> Mul ".($ip1 * $ip2);
        echo "<hr> Div ".($ip1 / $ip2);
        echo "<hr> Mod ".($ip1 % $ip2);
        echo "<hr> Exp ".($ip1 ** $ip2);
    ?>
</body>

</html>