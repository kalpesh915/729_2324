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
            PHP Array Functioncs
        */  

        $students = ["Bhavdeep", "Yograjsing", "Rachit", "Yash", "Adarsh"];

        function joinData($ans, $x){
            return $ans." * ".$x;
        }

        $result = array_reduce($students, "joinData");
        echo $result;
    ?>
</body>

</html>