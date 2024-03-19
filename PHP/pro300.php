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

    */ 

    $string= "welcome TO world of php regular expression with 1 12 123 1234 11";
    //$pattern = "/[a-z]/";
    //$pattern = "/[A-Z]/";
    //$pattern = "/[A-z]/";
    //$pattern = "/[123]/";
    //$pattern = "/[0-9]/";
    $pattern = "/[0-3]/";
    echo preg_replace($pattern, "#", $string);
?>  