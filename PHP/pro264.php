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

        function printer($key, $value){
            echo "<hr> key is $key and value is $value";
        }

        $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
        array_walk($a, "printer");
    ?>
</body>

</html>