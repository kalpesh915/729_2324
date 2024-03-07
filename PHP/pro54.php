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
        $str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
        echo htmlentities($str);

        echo "<hr>";

        $str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
        echo html_entity_decode($str);
    ?>
</body>
</html>