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
            Get Your Time Zone
            If the time you got back from the code is not correct, it's probably because your server is in another country or set up for a different timezone.
            So, if you need the time to be correct according to a specific location, you can set the timezone you want to use.
        */ 

        echo "<hr> Current Time Zone ".date_default_timezone_get();
        date_default_timezone_set("Asia/Kolkata");
        echo "<hr> Current Time Zone ".date_default_timezone_get();
    ?>
</body>
</html>