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
        Returns an integer less than, equal to, or greater than zero, depending on both values
        value1 - value2
    */
        echo "<hr>".( 10 <=> 10);
        echo "<hr>".( 10 <=> 100);
        echo "<hr>".( 100 <=> 10);
    ?>
</body>

</html>