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
            Passing Arguments by value
            In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.
        */ 

        function add10($ip1){ // $ip1 in parameter is consider as local variable
            $ip1 += 10;
            echo "<hr> Between Function \$ip1 is $ip1"; // 20
        }

        $ip1 = 10; // global
        echo "<hr> Before Function Call \$ip1 is $ip1"; // 10

        add10($ip1);

        echo "<hr> After Function Call \$ip1 is $ip1"; // 
    ?>
</body>
</html>