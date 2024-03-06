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
            PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
        */ 

        $msg = "How are you ?";

        function greetings1(){
            $message = "Good Morning";
            echo "<hr> Welcome, $message ".$GLOBALS["msg"];
        }

        function greetings2(){
            $message = "Good Evening";
            echo "<hr> Welcome, $message ".$GLOBALS["msg"];
        }

        greetings1();
        greetings2();
    ?>
</body>
</html>