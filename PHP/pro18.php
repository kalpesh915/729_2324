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
            You can have local variables with the same name in different functions, because local variables are only recognized by the function in which they are declared.
        */ 

        function greetings1(){
            $message = "Good Morning";
            echo "<hr> Welcome, $message";
        }

        function greetings2(){
            $message = "Good Evening";
            echo "<hr> Welcome, $message";
        }

        greetings1();
        greetings2();
    ?>
</body>
</html>