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

        //$array1 = ["1"=>"Yograjsinh", "2"=>"Jayrajsinh","3"=>"Yash", "4"=>"Adarsh", "3"=>"Tushar"];

        $array1 = ["1"=>"Yograjsinh", "2"=>"Jayrajsinh","3"=>"Yash", "4"=>"Adarsh", "5"=>"Yash"];
        print_r(array_unique($array1));
    ?>
</body>

</html>