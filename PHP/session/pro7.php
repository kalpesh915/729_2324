<?php
    session_start();
    // Note: The session_start() function must be the very first thing in your document. Before any HTML tags.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        require_once("menu.php");
    
        unset($_SESSION["username"]);

        echo "<hr>Session Deleted<hr>";
    ?>
</body>
</html>