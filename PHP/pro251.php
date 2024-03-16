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
        $a=array("a"=>"red","b"=>"green","c"=>"blue");
        print_r ($a);
        echo "<hr>";
        array_shift($a);
        print_r ($a);
    ?>
</body>

</html>