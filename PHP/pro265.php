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

        function myfunction($value,$key)
        {
            echo "The key $key has the value $value<br>";
        }

        $a1=array("a"=>"red","b"=>"green");
        $a2=array($a1,"1"=>"blue","2"=>"yellow");
        array_walk_recursive($a2,"myfunction");
    ?>
</body>

</html>