<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        date_default_timezone_set("Asia/Kolkata");
        
        /*
            The PHP Date() Function
            The PHP date() function formats a timestamp to a more readable date and time.
            Syntax :  date(format,timestamp) 

            Parameter 	Description
            format 	Required. Specifies the format of the timestamp
            timestamp 	Optional. Specifies a timestamp. Default is the current date and time

            A timestamp is a sequence of characters, denoting the date and/or time at which a certain event occurred.

            Get a Date

            The required format parameter of the date() function specifies how to format the date (or time).

            Here are some characters that are commonly used for dates:

            d - Represents the day of the month (01 to 31)
            m - Represents a month (01 to 12)
            Y - Represents a year (in four digits)
            l (lowercase 'L') - Represents the day of the week

        */ 

        echo date("d/m/Y h:i:s a l");
    ?>
</body>
</html>