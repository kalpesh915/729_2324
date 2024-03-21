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
            Create a Date From a String With strtotime()
            The PHP strtotime() function is used to convert a human readable date string into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).

            Syntax : strtotime(time, now)
        */ 

        $newDate = strtotime("next sunday");
        echo "<hr>".date("d/m/Y h:i:s a l", $newDate);
        $newDate = strtotime("today");
        echo "<hr>".date("d/m/Y h:i:s a l", $newDate);
        $newDate = strtotime("tomorrow");
        echo "<hr>".date("d/m/Y h:i:s a l", $newDate);
        $newDate = strtotime("+5 Months");
        echo "<hr>".date("d/m/Y h:i:s a l", $newDate);

        // However, strtotime() is not perfect, so remember to check the strings you put in there.
    ?>
</body>
</html>