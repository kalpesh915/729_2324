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

        $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $result=array_flip($a1);
        print_r($result);
    ?>
</body>

</html>