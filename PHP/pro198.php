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
           Associative Arrays
           To add items to an associative array, or key/value array, use brackets [] for the key, and assign value with the = operator.
        */ 

        $cars = array("brand" => "Ford", "model" => "Mustang");
        $cars["color"] = "Red";

        echo "<hr>";
        print_r($cars);

        $cars["brand"] = "Honda";

        echo "<hr>";
        print_r($cars);
    ?>
</body>
</html>