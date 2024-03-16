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
            PHP Array Functioncs
        */  

        $firstname = "Peter";
        $lastname = "Griffin";
        $age = "41";

        $result = compact("firstname", "lastname", "age");

        print_r($result);

        echo "<hr>".count($result);
        echo "<hr>".current($result);
        next($result);
        echo "<hr>".current($result);
    ?>
</body>

</html>