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
            Compare the keys and values of two arrays (using two user-defined functions for comparison) and return the differences:
        */  

        function compare_key($ip1, $ip2){
            if($ip1 === $ip2){
                return 0;
            }else{
                return ($ip1 > $ip2 ? 1 : -1);
            }
        }

        function compare_value($ip1, $ip2){
            if($ip1 === $ip2){
                return 0;
            }else{
                return ($ip1 > $ip2 ? 1 : -1);
            }
        }

        $array1 = ["1"=>"Yograjsinh", "2"=>"Jayrajsinh","3"=>"Yash", "4"=>"Adarsh"];
        $array2 = ["1"=>"Yograjsinh", "2"=>"Jayrajsinh","3"=>"Yash"];

        $result = array_uintersect($array1, $array2, "compare_value");
        print_r($result);
    ?>
</body>

</html>