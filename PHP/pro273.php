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
            Sort an array by using natsort() and natcasesort():
        */
    $temp_files = array("temp15.txt", "Temp10.txt","temp1.txt", "Temp22.txt", "temp2.txt");

    echo "<hr>". current($temp_files);
    next($temp_files);
    echo "<hr>". current($temp_files);
    echo "<hr>". pos($temp_files);
    prev($temp_files);
    echo "<hr>". current($temp_files);
    end($temp_files);
    echo "<hr>". current($temp_files);
    reset($temp_files);
    echo "<hr>". current($temp_files);
    ?>
</body>

</html>