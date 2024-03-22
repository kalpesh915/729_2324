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
            PHP Read Single Line - fgets() : The fgets() function is used to read a single line from a file.
        */ 
        $myfile = fopen("data.txt", "r") or die("Unable to open file");
        echo "<hr>".fgets($myfile);
        echo "<hr>".fgets($myfile);
        echo "<hr>".fgets($myfile);
        echo "<hr>".fgets($myfile);
        fclose($myfile);
    ?>
</body>
</html>