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
            The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.
        */ 

        $city = array("Rajkot", "Baroda", "Bhuj", "Jamnagar", "Bhavanagar", "Ahamdabad", "Surat", "Junagadh");

        echo "<hr>";
        print_r($city);

        sort($city); // ascending order

        echo "<hr>";
        print_r($city);

        rsort($city); // descending order

        echo "<hr>";
        print_r($city);
    ?>
</body>
</html>