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
            Loop Through an Indexed Array
            To loop through and print all the values of an indexed array, you could use a foreach loop, like this:
        */ 

        $students = ["Gaurang", "Bhavdeep", "Yograjsinh", "Yash", "Tusahr", "Adarsh", "Yagnik"];

        
        foreach($students as $student){
            echo "<hr> Welcome $student";
        }
    ?>
</body>
</html>