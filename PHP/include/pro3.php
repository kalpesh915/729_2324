<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("menu.php");
        include("users.php");
        include("header.php");
        echo "<h1>Welcome $username</h1>";
        include("footer.php");

        /*
            Use require when the file is required by the application.
            Use include when the file is not required and application should continue when file is not found.

        */ 
    ?>
</body>
</html>