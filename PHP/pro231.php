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
            Compare the keys of two arrays, and return the matches:
        */

        $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2=array("a"=>"red","f"=>"green","d"=>"blue");
        
        $result=array_intersect_key($a1,$a2);
        print_r($result);
    ?>
</body>

</html>