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
           PHP Add Array Items
           To add items to an existing array, you can use the bracket [] syntax.
        */ 

        $cars = array("brand" => "Ford", "model" => "Mustang");
    

        echo "<hr>";
        print_r($cars);

        $cars += ["color" => "red", "year" => 1964, "seating" => 5, "fuel" => "Diesel"];

        echo "<hr>";
        print_r($cars);
    ?>
</body>
</html>