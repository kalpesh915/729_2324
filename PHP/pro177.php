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
             Array Items
             Array items can be of any data type. The most common are strings and numbers (int, float), but array items can also be objects, functions or even arrays. You can have different data types in the same array.
        */ 

        $students = ["gaurang", 11, 112.22, true, ["Volvo", "Mazda","Nissan"]];

        echo "<hr> Length of Array is : ".count($students);
        echo "<hr> Length of Sub Array is : ".count($students[4]);
    ?>
</body>
</html>