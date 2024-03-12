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
            The for loop - Loops through a block of code a specified number of times.
            The PHP for Loop The for loop is used when you know how many times the script should run.

            for (expression1, expression2, expression3) {
                // code block
            }

            This is how it works:

            expression 1 is evaluated once (initlization)
            expression 2 is evaluated before each iterarion (condition)
            expression 3 is evaluated after each iterarion (increment / decrement)

            for(initlization; condition; increment / decrement ){
                executable code
            }
        */ 

        for($i = 1; $i <= 10; $i++){
            echo " $i";
        }
    ?>
</body>
</html>