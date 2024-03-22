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
            PHP Check End-Of-File - feof()
            The feof() function checks if the "end-of-file" (EOF) has been reached.
            The feof() function is useful for looping through data of unknown length.
        */ 
        $myfile = fopen("data.txt", "r") or die("Unable to open file");
        // run loop untile myfile not reached at end of file
        while(!feof($myfile)){
            echo "<hr>".fgets($myfile);    
        }
        fclose($myfile);
    ?>
</body>
</html>