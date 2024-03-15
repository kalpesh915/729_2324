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
            Send each value of an array to a function, multiply each value by itself, and return an array with the new values:
        */

        function myfunction($x){
            return $x * $x;
        }

        $a=array(1,2,3,4,5);
        print_r(array_map("myfunction",$a));
    ?>
</body>

</html>