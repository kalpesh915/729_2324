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
          Remove the first Item
          The array_shift() function removes the first item of an array.
        */ 

        $city = array("Rajkot", "Baroda", "Bhuj", "Jamnagar", "Bhavanagar", "Ahamdabad", "Surat", "Junagadh");

        echo "<hr>";
        print_r($city);

        array_shift($city);
        array_shift($city);
        array_shift($city);
        array_shift($city);
        array_shift($city);

        echo "<hr>";
        print_r($city);
    ?>
</body>
</html>