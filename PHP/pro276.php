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
    function my_sort($a, $b)
    {
        if ($a == $b) return 0;
        return ($a < $b) ? -1 : 1;
    }

    $arr = array("a" => 4, "b" => 2, "c" => 8, "d" => 6);
    uasort($arr, "my_sort");

    foreach ($arr as $key => $value) {
        echo "[" . $key . "] => " . $value;
        echo "<br>";
    }
    ?>
</body>

</html>