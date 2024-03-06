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
            The PHP print Statement
            The print statement can be used with or without parentheses: print or print().
        */ 

        $ip1 = 10;
        $ip2 = 20;
        print "<hr>Welcome";
        print("<hr>Welcome");
        //print "<hr>This ", "string ", "was ", "made ", "with multiple parameters.";
        print "<hr>This "."string "."was "."made "."with multiple parameters.";
        print "<hr>Value of \$ip1 is $ip1 and \$ip2 is $ip2";
        print "<hr>Value of \$ip1 is ". $ip1 ." and \$ip2 is ". $ip2;
    ?>
</body>
</html>