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
            PHP Default Argument Value
            The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:
        */ 

        function greetings($roll = 0, $fname = "N/A", $lname = "N/A"){
            echo "<hr> Welcome $fname $lname to world of UDF functions in PHP your roll no. is $roll";
        }

        greetings();
        greetings(111);
        greetings(111, "Bhavdeep");
        greetings(111, "Bhavdeep", "Sorathiya");
        
        
        echo "<hr> Program Completed";
        
    ?>
</body>
</html>