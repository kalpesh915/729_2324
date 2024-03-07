<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /**/
        $ip1 = "hello world";
        echo "<hr> Original String is $ip1";
        $encode = base64_encode($ip1);
        echo "<hr> Encoded String is $encode";
        echo "<hr> Decode String is ".base64_decode($encode);
    ?>
</body>

</html>