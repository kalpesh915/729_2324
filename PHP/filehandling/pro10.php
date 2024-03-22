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
            PHP File Create/Write
            In this chapter we will teach you how to create and write to a file on the server.

            PHP Create File - fopen()
            The fopen() function is also used to create a file. Maybe a little confusing, but in PHP, a file is created using the same function used to open files.
            If you use fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).

            PHP Write to File - fwrite()
            The fwrite() function is used to write to a file.
            The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.
        */ 

        $myfile = fopen("data1.txt", "w") or die("Unable to open file");
        //fputs($myfile, "Welcome to world of PHP files");
        fwrite($myfile, "Welcome to world of PHP files");
        fclose($myfile);

        
    ?>
</body>
</html>