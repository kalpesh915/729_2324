<?php
    declare(strict_types=1);
?>
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
            PHP Return Type Declarations
            PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.
            To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.
        */

        function makeDivision($ip1, $ip2) : int{
            /*$ans = $ip1 / $ip2;
            return $ans;*/

            //return $ip1 / $ip2;
            return (int) ($ip1 / $ip2);
        }

        echo "<hr>".makeDivision(111, 10);
        echo "<hr>".makeDivision(111, 11);
        echo "<hr>".makeDivision(117, 10);
    ?>
</body>
</html>