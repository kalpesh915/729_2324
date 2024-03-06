<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Select Date of Birth :
    <select>
        <?php 
            for($i=1; $i<=31; $i++){
                echo "<option>$i</option>";
            }
        ?>
    </select>
    <select>
        <?php 
            for($i=1; $i<=12; $i++){
                echo "<option>$i</option>";
            }
        ?>
    </select>
    <select>
        <?php 
            for($i=2000; $i<=2100; $i++){
                echo "<option>$i</option>";
            }
        ?>
    </select>
</body>
</html>