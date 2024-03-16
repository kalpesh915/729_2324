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
            Replace the values of the first array ($a1) with the values from the second array ($a2):
        */  

        $students1 = ["Bhavdeep", "Yograjsing", "Rachit"];
        $students2 = ["Tushar", "Sujal", "Gaurang"];

        print_r(array_replace($students1, $students2));

        
    ?>
</body>

</html>