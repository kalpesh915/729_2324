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
        PHP Logical Operators
        The PHP logical operators are used to combine conditional statements.

        Xor ||

        if any of the one condition is true it will return true

        condition1      condition2      answer
        T               F               T
        F               T               T
        F               F               F
        T               T               F
    */
        
        echo "<hr>".(var_dump(10 > 8 Xor 10 > 100));
        echo "<hr>".(var_dump(10 > 80 Xor 10 > 1));
        echo "<hr>".(var_dump(10 > 80 Xor 10 > 100));
        echo "<hr>".(var_dump(10 > 8 Xor 10 > 5));

    ?>
</body>

</html>