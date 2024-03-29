<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file1" id="file1" required accept=".jpg, .png, .gif" multiple max="5">
        <input type="submit" value="Upload File" name="uploadProcess">
        <input type="reset" value="Reset">
    </form>
    <?php
    if (isset($_SESSION["msg"])) {
        echo "<hr>" . $_SESSION["msg"] . "<hr>";
        unset($_SESSION["msg"]);
    }
    ?>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["uploadProcess"])) {
    
}
?>