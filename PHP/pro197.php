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

        $city = array("Rajkot", "Baroda", "Bhuj", "Jamnagar", "Bhavanagar", "Ahamdabad", "Surat", "Junagadh");

        echo "<hr>";
        print_r($city);

        //$city = ["morbi"]; // overwrite existing array 
        $city[] = "morbi";

        echo "<hr>";
        print_r($city);
    ?>
</body>
</html>