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
            The example below outputs the dates for the next 10 Sundays:
        */ 

        $satrtDate = strtotime("next sunday");
        $endDate = strtotime("+10 weeks", $satrtDate);

        while($satrtDate < $endDate){
            echo "<hr>".date("d/m/Y", $satrtDate);
            $satrtDate = strtotime("+1 week", $satrtDate);
        }
    ?>
</body>
</html>