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
            String Concatenation
            To concatenate, or combine, two strings you can use the . operator:
        */ 

              //0123456789012345678901234567890
        $ip1 = "welcome to world of php Strings";
        $ip2 = "with W3schools.com";

        $ans = $ip1.$ip2;
        echo "<hr>".$ans;

        $ans = $ip1." ".$ip2;
        echo "<hr>".$ans;

        $ans = "$ip1 $ip2";
        echo "<hr>".$ans;
    ?>
</body>
</html>