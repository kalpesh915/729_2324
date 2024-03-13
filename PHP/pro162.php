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
            PHP Function Arguments
            Information can be passed to functions through arguments. An argument is just like a variable. Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma. 
        */ 

        function greetings($roll, $fname, $lname){
            echo "<hr> Welcome $fname $lname to world of UDF functions in PHP your roll no. is $roll";
        }

        //greetings();
        greetings(111, "Bhavdeep", "Sorathiya");
        greetings("Bhavdeep", "Sorathiya", 111);
        echo "<hr> Program Completed";
        
    ?>
</body>
</html>