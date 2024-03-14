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
            asort() - sort associative arrays in ascending order, according to the value
            ksort() - sort associative arrays in ascending order, according to the key
            arsort() - sort associative arrays in descending order, according to the value
            krsort() - sort associative arrays in descending order, according to the key
        */ 

        $student = array("roll" => 1, "fname" => "Yash", "lname" => "Vaghela", "city" => "Rajkot", "state" => "Gujarat");

        echo "<hr> Original Array is : <hr>";
        print_r($student);

        // arsort :
        arsort($student);

        echo "<hr> Sorted Array by value is (reverse) : <hr>";
        print_r($student);

        // krsort :
        krsort($student);

        echo "<hr> Sorted Array by key is (reverse) : <hr>";
        print_r($student);
    ?>
</body>
</html>