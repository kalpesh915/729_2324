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
            Excecute a Function Item
            Array items can be of any data type, including function. To execute such a function, use the index number followed by parentheses ():
        */ 

        function greetings(){
            echo "<hr> Function Called from Array";
        }

        $student = array("udit", "ghetiya", "rajkot", "greetings");

        $student[3]();
    ?>
</body>
</html>