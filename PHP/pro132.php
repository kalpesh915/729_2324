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
            The while loop - Loops through a block of code as long as the specified condition is true.

            while(condition){
                executable code
                update loop control variable
            }
        */ 

        $ip1 = 1;

        while($ip1 <= 10){
            echo " $ip1";
            $ip1++;
        }
    ?>
</body>
</html>