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
            Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function)
        */  

        function compare($ip1, $ip2){
            if($ip1 === $ip2){
                return 0;
            }else{
                return ($ip1 > $ip2 ? 1 : -1);
            }
        }

        $array1 = ["1"=>"Yograjsinh", "2"=>"Jayrajsinh","3"=>"Yash"];
        $array2 = ["1"=>"Yograjsinh", "3"=>"Yash","4"=>"Adarsh", "5"=>"Bhavdeep"];

        $result = array_udiff($array1, $array2, "compare");
        print_r($result);
    ?>
</body>

</html>