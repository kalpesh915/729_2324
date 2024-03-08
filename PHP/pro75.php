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

        $ip1 = 10;
        echo "<hr>";
        var_dump(is_numeric($ip1));

        $ip1 = "1010";
        echo "<hr>";
        var_dump(is_numeric($ip1));

        $ip1 = "10.10";
        echo "<hr>";
        var_dump(is_numeric($ip1));

        $ip1 = "Welcome";
        echo "<hr>";
        var_dump(is_numeric($ip1));
    ?>
</body>

</html>