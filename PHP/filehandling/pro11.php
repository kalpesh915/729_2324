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
            PHP Overwriting
            Now that "data2.txt" contains some data we can show what happens when we open an existing file for writing. All the existing data will be ERASED and we start with an empty file.
        */ 

        $myfile = fopen("data2.txt", "w") or die("Unable to open file");
        //fputs($myfile, "Welcome to world of PHP files");
        fwrite($myfile, "Welcome to world of PHP files");
        fclose($myfile);

        
    ?>
</body>
</html>