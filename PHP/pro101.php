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

        and &&

        if both conditions are true it will return true

        condition1      condition2      answer
        T               F               F
        F               T               F
        F               F               F
        T               T               T
    */
        
        echo "<hr>".(var_dump(10 > 8 && 10 > 100));
        echo "<hr>".(var_dump(10 > 80 && 10 > 1));
        echo "<hr>".(var_dump(10 > 80 && 10 > 100));
        echo "<hr>".(var_dump(10 > 8 && 10 > 5));

        echo "<hr>".(var_dump(10 > 8 and 10 > 100));
    ?>
</body>

</html>