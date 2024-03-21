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
            The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.
            Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.

            PHP include and require Statements
            It is possible to insert the content of one PHP file into another PHP file (before the server executes it), with the include or require statement.
            The include and require statements are identical, except upon failure:

            
            require will produce a fatal error (E_COMPILE_ERROR) and stop the script
            include will only produce a warning (E_WARNING) and the script will continue

        */ 
        echo "<hr> Some code before add Header<hr>";
        // require("header.php");
        require("header1.php");
        echo "<hr> Some code after add Header<hr>";

        /*
            Including files saves a lot of work. This means that you can create a standard header, footer, or menu file for all your web pages. Then, when the header needs to be updated, you can only update the header include file.
        */ 
    ?>
</body>
</html>