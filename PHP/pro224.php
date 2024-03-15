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
            Compare the keys and values of two arrays (use a user-defined function to compare the keys), and return the differences:
        */

    function myfunction($ip1, $ip2)
    {
        if ($ip1 === $ip2) {
            return 0;
        }
        return ($ip1 > $ip2) ? 1 : -1;
    }

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $a2 = array("a" => "red", "b" => "green", "e" => "blue");

    $result = array_diff_ukey($a1, $a2, "myfunction");
    print_r($result);
    ?>
</body>

</html>