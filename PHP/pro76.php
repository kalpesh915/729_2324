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

        $ip1 = 10.10;
        $ans = $ip1;
        echo "<hr> value of \$ip1 is $ip1 type is ".gettype($ip1)." and \$ans is $ans type is ".gettype($ans);

        $ip1 = 10.10;
        $ans = (int)$ip1;
        echo "<hr> value of \$ip1 is $ip1 type is ".gettype($ip1)." and \$ans is $ans type is ".gettype($ans);

        $ip1 = 10.10;
        $ans = (integer)$ip1;
        echo "<hr> value of \$ip1 is $ip1 type is ".gettype($ip1)." and \$ans is $ans type is ".gettype($ans);

        $ip1 = "10.10";
        $ans = (int)$ip1;
        echo "<hr> value of \$ip1 is $ip1 type is ".gettype($ip1)." and \$ans is $ans type is ".gettype($ans);

        $ip1 = "10.10";
        $ans = (float)$ip1;
        echo "<hr> value of \$ip1 is $ip1 type is ".gettype($ip1)." and \$ans is $ans type is ".gettype($ans);
    ?>
</body>

</html>