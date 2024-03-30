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
        <input type="file" name="file1[]" id="file1" required accept=".jpg, .png, .gif" multiple>
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
        $files = $_FILES["file1"];

        //print_r($files);

        echo "<hr> Name is <hr>"; print_r($files["name"]);
        echo "<hr> Type is <hr>"; print_r($files["type"]);
        echo "<hr> Size is <hr>"; print_r($files["size"]);
        echo "<hr> Error is <hr>"; print_r($files["error"]);
        echo "<hr> Full_Path is <hr>"; print_r($files["full_path"]);
        echo "<hr> TMP_ Name is <hr>"; print_r($files["tmp_name"]);
    }
?>