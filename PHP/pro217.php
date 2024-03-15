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

        $data = array(
            array(
              'id' => 5698,
              'first_name' => 'Peter',
              'last_name' => 'Griffin',
            ),
            array(
              'id' => 4767,
              'first_name' => 'Ben',
              'last_name' => 'Smith',
            ),
            array(
              'id' => 3809,
              'first_name' => 'Joe',
              'last_name' => 'Doe',
            )
          );
          
          $last_names = array_column($data, 'last_name');
          print_r($last_names);
    ?>
</body>
</html>