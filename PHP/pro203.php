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
           Using the unset Function
           You can also use the unset() function to delete existing array items.
           Note: The unset() function does not re-arrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.
        */ 

        $city = array("Rajkot", "Baroda", "Bhuj", "Jamnagar", "Bhavanagar", "Ahamdabad", "Surat", "Junagadh");

        echo "<hr>";
        print_r($city);

        unset($city[0], $city[1], $city[4]);

        echo "<hr>";
        print_r($city);
    ?>
</body>
</html>