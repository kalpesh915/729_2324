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
            PHP Case Sensitivity
            In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
            Note: However; all variable names are case-sensitive!
        */ 

        $cityName = "Rajkot"; 
        echo "<hr>Welcome to $cityName";
        ECHO "<hr>Welcome to $cityname";
        Echo "<hr>Welcome to $CITYNAME";
    ?>
</body>
</html>