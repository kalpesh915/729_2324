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
            Counts all the values of an array
        */
        $a=array("A","Cat","Dog","A","Dog");
        print_r(array_count_values($a));
    ?>
</body>

</html>