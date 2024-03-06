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
            PHP The global Keyword
            The global keyword is used to access a global variable from within a function.
            To do this, use the global keyword before the variables (inside the function):
        */ 

        $msg = "How are you ?";

        function greetings1(){
            global $msg;
            $message = "Good Morning";
            echo "<hr> Welcome, $message $msg";
        }

        function greetings2(){
            global $msg;
            $message = "Good Evening";
            echo "<hr> Welcome, $message $msg";
        }

        greetings1();
        greetings2();
    ?>
</body>
</html>