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

        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
        print_r(array_change_key_case($age,CASE_UPPER));
    ?>
</body>
</html>