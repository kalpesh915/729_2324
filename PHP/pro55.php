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
            
        */
    echo levenshtein("Hello World", "ello World");
    echo "<br>";
    echo levenshtein("Hello World", "ello World", 10, 20, 30);
    ?>
</body>

</html>