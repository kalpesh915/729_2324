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
            Passing Arguments by reference
            When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:
        */ 

        function add10(&$ip1){ // $ip1 in parameter is consider as reference variable
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