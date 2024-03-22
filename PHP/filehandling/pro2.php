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
            PHP File Open/Read/Close
            In this chapter we will teach you how to open, read, and close a file on the server
            PHP Open File - fopen()
            A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.

            The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened. The following example also generates a message if the fopen() function is unable to open the specified file:
        */ 

        // fopen(filename, mode)
        $myfile = fopen("data.txt", "r") or die("Unable to open file");
        // fread(file pointer, number of characters to read)
        echo fread($myfile, 10);
        // fclose(file pointer)
        fclose($myfile);
    ?>
</body>
</html>