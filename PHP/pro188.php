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
            Array Keys
            When creating indexed arrays the keys are given automatically, starting at 0 and increased by 1 for each item, so the array above could also be created with keys:
        */ 

        $student = [
            0 => 123,
            1 => "Adarsh",
            2 => "Chavda",
            3 => "Rajkot",
        ];

        print_r($student);
    ?>
</body>
</html>