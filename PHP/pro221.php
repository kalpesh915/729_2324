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
            Compare arrays, and returns the differences (compare key and values)
        */

    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $a2 = array("a" => "red", "b" => "green", "c" => "blue");

    $result = array_diff_assoc($a1, $a2);
    print_r($result);
    ?>
</body>

</html>