<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require("menu.php");
        require("users.php");
        require("header.php");
        echo "<h1>Welcome $username</h1>";
        require("footer.php");
    ?>
</body>
</html>