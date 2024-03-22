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
            PHP Append Text
            You can append data to a file by using the "a" mode. The "a" mode appends text to the end of the file, while the "w" mode overrides (and erases) the old content of the file.
        */ 

        $myfile = fopen("data3.txt", "a") or die("Unable to open file");
        fwrite($myfile, "Welcome to world of PHP files\n");
        fclose($myfile);

        
    ?>
</body>
</html>