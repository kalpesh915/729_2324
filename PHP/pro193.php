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
           Update Array Item
           To update an existing array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.
        */ 

        $city = array("Rajkot", "Baroda", "Bhuj", "Jamnagar", "Bhavanagar", "Ahamdabad", "Surat", "Junagadh");

        echo "<hr>";
        print_r($city);

        $city[0] = "RAJKOT";
        echo "<hr>";
        print_r($city);
    ?>
</body>
</html>