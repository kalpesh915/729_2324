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
            Create a Date With mktime()
            The optional timestamp parameter in the date() function specifies a timestamp. If omitted, the  current date and time will be used (as in the examples above).

            The PHP mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
            
            Syntax
            mktime(hour, minute, second, month, day, year)    
        */ 

        $newDate = mktime(10, 10, 10, 3, 25, 2025);

        //echo date("d/m/Y h:i:s a l");
        echo date("d/m/Y h:i:s a l", $newDate);
    ?>
</body>
</html>