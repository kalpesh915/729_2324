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
            The break Statement
            With the break statement we can stop the loop even if the condition is still true:
        */ 

        $ip1 = 1;
        
        while($ip1 <= 10){
            if($ip1 == 5){
                break;
            }
            echo " $ip1";
            $ip1++;   
        }
    ?>
</body>
</html>