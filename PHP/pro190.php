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
            PHP Access Arrays, Access Array Item
            To access an array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.
        */ 

        $student = [];

        $student[0] = "Yograjsinh";
        $student[1] = "Udit";
        $student[2] = "Bhavdeep";
        $student[3] = "Rachit";
        $student[4] = "Yash";
        $student["city"] = "Rajkot";

        echo "<hr>".$student[0];
        echo "<hr>".$student["city"];
        echo "<hr>".$student['city'];
    ?>
</body>
</html>