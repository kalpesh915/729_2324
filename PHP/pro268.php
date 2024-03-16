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
            Assign the values "Cat", "Dog" and "Horse" to the variables $a, $b and $c:
        */  

        $my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
        extract($my_array);
        echo "\$a = $a; \$b = $b; \$c = $c";
    ?>
</body>

</html>