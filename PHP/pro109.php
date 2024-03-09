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
        Null coalescing
    */

        $ip1 = 100;
        $ip2 = 150;
        $ip3 = 500;

        $ans = ($ip1 + $ip2 + $ip3 + ($ip4 ?? 10));

        echo "<hr>Sum is $ans";
    ?>
</body>

</html>