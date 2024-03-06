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
            Change Data Type
            If you assign an integer value to a variable, the type will automatically be an integer.If you assign a string to the same variable, the type will change to a string:
        */

        $data = 100;
        echo "<hr>";
        var_dump($data);
        $data = 100.55;
        echo "<hr>";
        var_dump($data);
        $data = "Rajkot";
        echo "<hr>";
        var_dump($data);
        $data = true;
        echo "<hr>";
        var_dump($data);
    ?>
</body>
</html>