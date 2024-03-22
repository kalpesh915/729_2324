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
            PHP Read Single Character - fgetc() : The fgetc() function is used to read a single character from a file.
        */ 
        $myfile = fopen("data.txt", "r") or die("Unable to open file");
        // run loop untile myfile not reached at end of file
        while(!feof($myfile)){
            echo " ".fgetc($myfile);    
        }
        fclose($myfile);

        // Note: After a call to the fgetc() function, the file pointer moves to the next character.
    ?>
</body>
</html>