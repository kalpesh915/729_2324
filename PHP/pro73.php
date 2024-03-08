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
           
        */ 

        $ip1 = 10.10;
        echo "<hr>";
        var_dump(is_finite($ip1));

        $ip1 = 1.9e300;
        echo "<hr>";
        var_dump(is_finite($ip1));

        $ip1 = 1.9e310;
        echo "<hr>";
        var_dump(is_finite($ip1));

        $ip1 = 1.9e310;
        echo "<hr>";
        var_dump(is_infinite($ip1));

    ?>
</body>

</html>