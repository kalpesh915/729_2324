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
            count number of Days 
        */ 
        date_default_timezone_set("Asia/Kolkata");
        $targetDate = strtotime("21 october");
        $days = ceil(($targetDate - time()) / 60 / 60 / 24);
        echo "<hr> Diffrence Days is $days ";
    ?>
</body>
</html>