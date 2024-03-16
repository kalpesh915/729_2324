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
            PHP Array Functioncs
    
        */
        $my_array = array("red","green","blue","yellow","purple");

        shuffle($my_array);
        print_r($my_array);

        echo "<hr>";
        echo sizeof($my_array);
    ?>
</body>

</html>