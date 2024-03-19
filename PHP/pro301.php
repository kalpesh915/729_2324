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

    $string= "welcome to the world of php regular expression with $1 12 123 1234 11 with";
    //$pattern = "/to|php/";
    //$pattern = "/./";
    //$pattern = "/t./";
    //$pattern = "/^welcome/";
    //$pattern = "/^to/";
    //$pattern = "/world$/";
    //$pattern = "/with$/";
    //$pattern = "/\d/";
    //$pattern = "/\D/";
    //$pattern = "/\s/";
    //$pattern = "/\S/";
    //$pattern = "/\w/";
    //$pattern = "/\W/";
    //$pattern = "/p/";
    //$pattern = "/\bp/";
    //$pattern = "/p\b/";
    $pattern = "/\u{006f}/";
    echo preg_replace($pattern, "#", $string);
?>  