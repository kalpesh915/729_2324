<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $gb = disk_free_space("c://") / 1024 / 1024 / 1024;
        echo $gb;
    ?>
</body>
</html>