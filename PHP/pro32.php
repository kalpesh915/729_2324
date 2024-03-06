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
            PHP Array
            An array stores multiple values in one single variable.
            In the following example $cars is an array. The PHP var_dump() function returns the data type and value:
        */
        
        $ip1 = ["Rajkot", "Baroda", "Bhuj"];
        echo "<hr>";
        var_dump($ip1);
        $ip1 = array("Rajkot", "Baroda", "Bhuj");
        echo "<hr>";
        var_dump($ip1);
    ?>
</body>
</html>