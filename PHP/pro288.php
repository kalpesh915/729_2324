<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <input type="text" name="fname" id="fname" required placeholder="Enter First Name"><br>
        <input type="text" name="lname" id="lname" required placeholder="Enter Last Name"><br>
        <input type="text" name="city" id="ct" required placeholder="Enter City"><br>
        <input type="submit" value="Send Data">
    </form>
</body>

</html>

<?php
    //print_r($_POST);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Welcome ".$_POST["fname"]." ".$_POST["lname"]." To ".$_POST["city"];
    }
    
?>