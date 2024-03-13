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
            Variable Number of Arguments
            By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.
            The variadic function argument becomes an array.
        */ 

        /*
            following example return an error beacuse first parameter $data as work as variadic argument it will receive all the data then our $ip1 parameter alwasy empty
        */ 
        function makeSum(...$data, $ip1){
            $ans = $ip1;
            foreach($data as $x){
                $ans += $x;
            }
            echo "<hr> Sum is $ans";
        }

        makeSum(11, 22);
        makeSum(11, 22, 33);
        makeSum(11, 22, 33, 44);
        makeSum(11, 22, 33, 44, 55);
        makeSum(11, 22, 33, 44, 55, 66);
        makeSum(11, 22, 33, 44, 55, 66, 77);
        makeSum(11, 22, 33, 44, 55, 66, 77, 88);
    ?>
</body>
</html>