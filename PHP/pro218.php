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
            Create an array by using the elements from one "keys" array and one "values" array:
        */
        $fname = array("Peter", "Ben", "Joe", "udit");
        $age = array("35", "37", "43", "22");

        $c = array_combine($fname, $age);
        print_r($c);
    ?>
</body>

</html>