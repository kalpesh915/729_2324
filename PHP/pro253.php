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
        $a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2 = array("a"=>"purple","b"=>"orange");
        //array_splice($a1,0,1,$a2);
        //array_splice($a1,0,4,$a2);
        array_splice($a1,0,2,$a2);
        print_r($a1);
    ?>
</body>

</html>