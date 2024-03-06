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
          echo has no return value while print has a return value of 1 so it can be used in expressions
        */

        if(print("welcome")){
            echo "<hr>True";
        }else{
            echo "<hr>False";
        }
    ?>
</body>
</html>