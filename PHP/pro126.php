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
        Short Hand If...Else
        if...else statements can also be written in one line, but the syntax is a bit different.

        or ternary operator
        (condition ? true part : false part);

        This technique is known as Ternary Operators, or Conditional Expressions.
    */
        $ip1 = 100;
        $ip2 = 20;
        $ans = ($ip1 > $ip2) ?  $ip1 : $ip2;

        echo $ans;
    ?>
</body>

</html>