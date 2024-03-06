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
            If you want to change the data type of an existing variable, but not by changing the value, you can use casting.
            Casting allows you to change data type on variables:
        */

        $data = 100.55;
        echo "<hr>";
        var_dump($data);

        $data = (integer) 100.55;
        echo "<hr>";
        var_dump($data);

        $data = (string) 100.55;
        echo "<hr>";
        var_dump($data);
        
    ?>
</body>
</html>