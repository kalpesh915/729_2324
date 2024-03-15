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
            Split an array into chunks of two:
        */ 

        $cars = array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
        print_r(array_chunk($cars, 3));
    ?>
</body>
</html>