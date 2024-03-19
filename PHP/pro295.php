<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
</body>
</html>

<?php
    /*  
        preg_match_all() 	
        Returns the number of times the pattern was found in the string, which may also be 0

    */ 

    $string= "welcome to world of php regular expression with 1 12 123 1234 11";
    $pattern = "/o/i";
    echo preg_replace($pattern, "O", $string);
?>  