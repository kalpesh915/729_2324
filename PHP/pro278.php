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
        Sort the elements of an array by values using a user-defined comparison function:
    */
    function my_sort($a, $b)
    {
        if ($a == $b) return 0;
        return ($a < $b) ? -1 : 1;
    }

    $arr = array(4, 2, 8, 6);
    usort($arr, "my_sort");

    foreach ($arr as $key => $value) {
        echo "[" . $key . "] => " . $value;
        echo "<br>";
    }
    ?>
</body>

</html>