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
            Convert String into Array
            The PHP explode() function splits a string into an array.
            The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.
        */ 

              //0123456789012345678901234567890
        $ip1 = "welcome to world of php Strings";
        echo "<hr> $ip1<hr>";
        $ans = explode(" ", $ip1);
        print_r($ans);
        $ans = explode("o", $ip1);
        echo "<hr>";
        print_r($ans);
        $ans = explode("e", $ip1);
        echo "<hr>";
        print_r($ans);
    ?>
</body>
</html>