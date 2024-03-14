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
            PHP Indexed Arrays
            In indexed arrays each item has an index number. By default, the first item has index 0, the second item has item 1, etc.
        */ 

                    //  0           1            2          3        4         5         6
        $students = ["Gaurang", "Bhavdeep", "Yograjsinh", "Yash", "Tusahr", "Adarsh", "Yagnik"];

        echo "<hr> Length of Array is : ".count($students);
        echo "<hr>";
        var_dump($students);
        echo "<hr>";
        echo $students[1];
        /*
            Access Indexed Arrays To access an array item you can refer to the index number.
        */
    ?>
</body>
</html>