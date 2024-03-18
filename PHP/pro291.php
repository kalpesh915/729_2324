<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file1" required>
        <input type="submit" value="Send Data" name="process">
    </form>
</body>
</html>

<?php
    if(isset($_POST["process"])){
        print_r($_FILES);
    }
?>  