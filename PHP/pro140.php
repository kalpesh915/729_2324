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
            The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.

            The PHP do...while Loop
            The do...while loop will always execute the block of code at least once, it will then check the condition, and repeat the loop while the specified condition is true.
        */ 

        $ip1 = 1;
        
        do{
            echo " $ip1";
            $ip1++;
        }while($ip1 <= 10);
    ?>
</body>
</html>