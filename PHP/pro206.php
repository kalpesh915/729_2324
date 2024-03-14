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
          Remove the Last Item
          The array_pop() function removes the last item of an array.
        */ 

        $city = array("Rajkot", "Baroda", "Bhuj", "Jamnagar", "Bhavanagar", "Ahamdabad", "Surat", "Junagadh");

        echo "<hr>";
        print_r($city);

        array_pop($city);
        array_pop($city);
        array_pop($city);
        array_pop($city);
        array_pop($city);

        echo "<hr>";
        print_r($city);
    ?>
</body>
</html>