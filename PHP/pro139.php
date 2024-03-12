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
            Alternative Syntax
            The while loop syntax can also be written with the endwhile statement like this
        */ 

        $ip1 = 1;
        
        while($ip1 <= 100):
            echo " $ip1";
            $ip1+=10;
        endwhile;
    ?>
</body>
</html>