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
            Replace the values of the first array with the values from the second array recursively:
        */  

        $a1=array("a"=>array("red"),"b"=>array("green","blue"),);
        $a2=array("a"=>array("yellow"),"b"=>array("black"));
        print_r(array_replace_recursive($a1,$a2));
        
    ?>
</body>

</html>