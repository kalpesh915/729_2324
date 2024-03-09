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
        PHP Constants
        A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
        A valid constant name starts with a letter or underscore (no $ sign before the constant name). 
    */
    
        define("students", ["Gaurang", "Udit", "Bhavdeep", "Yograjsinh","Yagnik", "Rachit", "Adarsh", "Yash", "Tushar"]);

        print_r(students);
    ?>
</body>

</html>