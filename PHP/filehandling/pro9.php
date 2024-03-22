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
            Note: After a call to the fgetc() function, the file pointer moves to the next character.
            ftell() used to get current cursor position from file
        */ 
        $myfile = fopen("data.txt", "r") or die("Unable to open file");
        echo "<hr> Current File Pointer Position is : ".ftell($myfile);
        echo "<hr>".fgets($myfile);
        echo "<hr> Current File Pointer Position is : ".ftell($myfile);
        echo "<hr>".fgets($myfile);
        echo "<hr> Current File Pointer Position is : ".ftell($myfile);
        fclose($myfile);

        
    ?>
</body>
</html>