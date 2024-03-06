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
            The PHP echo Statement
            The echo statement can be used with or without parentheses: echo or echo().
        */ 

        $ip1 = 10;
        $ip2 = 20;
        echo "<hr>Welcome";
        echo("<hr>Welcome");
        echo "<hr>This ", "string ", "was ", "made ", "with multiple parameters.";
        echo "<hr>Value of \$ip1 is $ip1 and \$ip2 is $ip2";
        echo "<hr>Value of \$ip1 is ", $ip1," and \$ip2 is ",$ip2;
        echo "<hr>Value of \$ip1 is ". $ip1 ." and \$ip2 is ". $ip2;
    ?>
</body>
</html>