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
        the ladder if
        The if...elseif...else statement executes different codes for more than two conditions.
    */

    $ip1 = 0;
    
    if($ip1 > 0){
        echo "<hr> Positive";
    }else if($ip1 < 0){
        echo "<hr> Negative";
    }else{
        echo "<hr> value is Zero";
    }
    ?>
</body>

</html>