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

        function test_odd($var)
        {
            return($var & 1);
        }

        $a1 = array(1,3,2,3,4);
        print_r(array_filter($a1,"test_odd"));
    ?>
</body>

</html>