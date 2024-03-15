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
            PHP Array Functioncs
    */
    $a = array("red", "green", "blue", "yellow", "brown");
    $random_keys = array_rand($a, 3);
    echo $a[$random_keys[0]] . "<br>";
    echo $a[$random_keys[1]] . "<br>";
    echo $a[$random_keys[2]];

    ?>
</body>

</html>