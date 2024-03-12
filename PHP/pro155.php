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
            Foreach Byref
            BUT, by using the & character in the foreach declaration, the array item is assigned by reference, which results in any changes done to the array item will also be done to the original array:
        */ 

        $students = ["Gaurang", "Bhavdeep", "Tushar", "Udit", "Yograjsinh", "Yagnik", "Rachit", "Adarsh", "Yash"];

        echo "<hr> Before Foreach Loop Array Elemenst are : <hr>";
        var_dump($students);

        echo "<hr> Values in Loop <hr>";
        foreach($students as &$tmp){
            $tmp .= " Bhai";
            echo $tmp." ";
        }

        echo "<hr> After Foreach Loop Array Elemenst are : <hr>";
        var_dump($students);
    ?>
</body>
</html>