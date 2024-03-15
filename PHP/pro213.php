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
            PHP Multidimensional Arrays
            In the previous pages, we have described arrays that are a single list of key/value pairs.
            However, sometimes you want to store values with more than one key. For this, we have multidimensional arrays.
            PHP - Multidimensional Arrays

            A multidimensional array is an array containing one or more arrays.

            PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.

             The dimension of an array indicates the number of indices you need to select an element.

            For a two-dimensional array you need two indices to select an element
            For a three-dimensional array you need three indices to select an element

        */ 

        /*
            PHP - Two-dimensional Arrays A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).
            First, take a look at the following table:

            Name 	Stock 	Sold
            Volvo 	22 	18
            BMW 	15 	13
            Saab 	5 	2
            Land Rover 	17 	15
        */ 

        $cars = array(
            array("Volvo", 22, 18), // index of Volvo is 0, 0
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15),
        );

        foreach($cars as $car){
            foreach($car as $tmp){
                echo " $tmp";
            }
            echo "<hr>";
        }
    ?>
</body>
</html>