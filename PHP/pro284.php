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
        $_SERVER
        $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations. The example below shows how to use some of the elements in $_SERVER:
    */
            
       // print_r($_SERVER);
    ?>

    <table border="2">
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>

        <?php
            foreach($_SERVER as $key => $value){
                echo "<tr>
                    <td>$key</td>
                    <td>$value</td>
                </tr>";
            }
        ?>
    </table>
</body>

</html>