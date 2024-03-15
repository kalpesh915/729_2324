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
            PHP Multidimensional Arrays 3 Dimentional Array
        */ 

        $cars = array(
            array("Toyota", "Fortuner", 2012, array(17, 23, 45, 67, 89)),
            array("Hyundai", "Creta", 2015, array(57, 73, 85, 27, 59)),
            array("Ford", "EcoSport", 2014, array(37, 13, 65, 87, 19)),
            array("Mahindra", "Scorpio", 2014, array(17, 13, 65, 97, 79)),
            array("Tata", "Harrier", 2014, array(51, 72, 85, 67, 79)),
        );

        //print_r($cars);

        //echo $cars[3][3][1];

        echo $cars[1][3][4];
    ?>
</body>
</html>