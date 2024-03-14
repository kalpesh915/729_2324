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
            Multiple Lines
            Line breaks are not important, so an array declaration can span multiple lines:
        */ 

        $student = [
            "roll" => 123,
            "fname" => "Adarsh",
            "lname" => "Chavda",
            "city" => "Rajkot",
        ];

        /*
            Trailing Comma, A comma after the last item is allowed:
        */ 

        print_r($student);
    ?>
</body>
</html>