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
           Remove Array Item
           To remove an existing item from an array, you can use the array_splice() function.
           With the array_splice() function you specify the index (where to start) and how many items you want to delete.
        */ 

        $city = array("Rajkot", "Baroda", "Bhuj", "Jamnagar", "Bhavanagar", "Ahamdabad", "Surat", "Junagadh");

        echo "<hr>";
        print_r($city);

        array_splice($city, 1, 3);

        echo "<hr>";
        print_r($city);
    ?>
</body>
</html>