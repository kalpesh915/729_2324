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

        date_default_timezone_set("Asia/Kolkata");
        $hours = date("H");

        //echo $hours;
        if($hours > 5 && $hours <= 11){
            echo "<hr> Good Morning";
        }else if($hours > 12 && $hours <= 14){
            echo "<hr> Good Noon";
        }else if($hours > 14 && $hours <= 20 ){
            echo "<hr> Good Evening";
        }else{
            echo "<hr> Have a nice day";
        }
    ?>
</body>

</html>