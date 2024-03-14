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
           Using the array_diff Function
           You can also use the array_diff() function to remove items from an associative array.This function returns a new array, without the specified items.
        */ 

        $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);

        echo "<hr>";
        print_r($cars);

        $cars = array_diff($cars, ["Mustang", "Ford"]);

        echo "<hr>";
        print_r($cars);
    ?>
</body>
</html>