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
           x mode : Creates a new file for write only. Returns FALSE and an error if file already exists (prevent file from overwriting)
        */ 

        $myfile = fopen("data4.txt", "x") or die("Unable to open file");
        fwrite($myfile, "Welcome to world of PHP files\n");
        fclose($myfile);

        
    ?>
</body>
</html>