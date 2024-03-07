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
            
        */ 

              //0123456789012345678901234567890
        $ip1 = "welcome to world of php Strings";
        
        echo "<hr> $ip1";
        echo "<hr> ".convert_uuencode($ip1);
        $encodede = convert_uuencode($ip1);
        //  ?=V5L8V]M92!T;R!W;W)L9"!O9B!P:'`@4W1R:6YG 
        echo "<hr>".convert_uudecode($encodede);
    ?>
</body>
</html>