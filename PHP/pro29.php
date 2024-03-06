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
            PHP Integer
            An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
            Rules for integers:
            An integer must have at least one digit,An integer must not have a decimal point, An integer can be either positive or negative, Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
        */
        
        $ip1 = 100;
        echo "<hr>";
        var_dump($ip1);
        $ip1 = -120;
        echo "<hr>";
        var_dump($ip1);
    ?>
</body>
</html>