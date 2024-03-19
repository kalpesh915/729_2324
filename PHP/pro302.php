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

    $string= "welcome to the world of php regular expression with $1 12 123 1234 11 with 1223";
    //$pattern = "/o+/";
    //$pattern = "/12*/";
    //$pattern = "/12?/";
    //$pattern = "/\d{3}/";
    //$pattern = "/\d{2,3}/"; // min 2 max 3
    //$pattern = "/\d{2,}/"; // min 2 max any
    //$pattern = "/\\$/";
    //$pattern = "/(o|t)/";
    $pattern = "/(s){2}/";
    echo preg_replace($pattern, "#", $string);
?>  