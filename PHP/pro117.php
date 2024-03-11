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
        logical or operator
        return true if any conditions are true

        check for vowel
    */

    $ip1 = 'I';
    $ip1 = strtolower($ip1);
    if ($ip1 == 'a' || $ip1 == 'e' || $ip1 == 'i' || $ip1 == 'o' || $ip1 == 'u') { 
        echo "<hr>True";
    }
    echo "<hr> Program Completed";
    ?>
</body>

</html>