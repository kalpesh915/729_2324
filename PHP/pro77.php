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
            Casting Variables to String           
        */

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (string) $a;
    $b = (string) $b;
    $c = (string) $c;
    $d = (string) $d;
    $e = (string) $e;

    //To verify the type of any object in PHP, use the var_dump() function:
    echo "<hr>"; var_dump($a);
    echo "<hr>"; var_dump($b);
    echo "<hr>"; var_dump($c);
    echo "<hr>"; var_dump($d);
    echo "<hr>"; var_dump($e);

    ?>
</body>

</html>