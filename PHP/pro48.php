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
            Escape Character
            To insert characters that are illegal in a string, use an escape character.
            An escape character is a backslash \ followed by the character you want to insert.
            An example of an illegal character is a double quote inside a string that is surrounded by double quotes:
        */ 

              //0123456789012345678901234567890
        $ip1 = "welcome to \"world\" of php Strings";
        
        echo "<hr> $ip1";
        
    ?>
</body>
</html>