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
            Integers can be specified in three formats: decimal (base 10), hexadecimal (base 16 - prefixed with 0x), octal (base 8 - prefixed with 0) or binary (base 2 - prefixed with 0b)
        */ 
        $ip1 = 4;
    
        echo "<hr>";
        var_dump($ip1);

        $ip1 = 014;
    
        echo "<hr>";
        var_dump($ip1);

        $ip1 = 0x14;
    
        echo "<hr>";
        var_dump($ip1);

        $ip1 = 0b110011;
    
        echo "<hr>";
        var_dump($ip1);
        
    ?>
</body>

</html>