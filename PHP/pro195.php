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
           Update Array Items in a Foreach Loop
           There are different techniques to use when changing item values in a foreach loop.
           One way is to insert the & character in the assignment to assign the item value by reference, and thereby making sure that any changes done with the array item inside the loop will be done to the original array:
        */ 

        $city = array("Rajkot", "Baroda", "Bhuj", "Jamnagar", "Bhavanagar", "Ahamdabad", "Surat", "Junagadh");

        echo "<hr>";
        print_r($city);

        foreach($city as &$tmp){
            $tmp .= " City";
        }

        $tmp = "Loop Over";

        echo "<hr>";
        print_r($city);
    ?>
</body>
</html>