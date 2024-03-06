<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $x = 10;
        $y = 20;

        function makeSum(){
            // add new global variables from function
            $GLOBALS['ans'] = $GLOBALS['x'] + $GLOBALS['y'];
            echo "<hr> Sum is ".$GLOBALS["ans"];
        }

        makeSum();
        echo "<hr>Sum Outside of Function $ans";
    ?>
</body>
</html>