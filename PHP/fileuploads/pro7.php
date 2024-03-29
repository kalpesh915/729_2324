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
        <input type="file" name="file1" id="file1" required accept=".jpg, .png, .gif">
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
/*
        PHP File Upload : check file size less than 2 MB
    */

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["uploadProcess"])) {
    // get file data from HTML form.
    $file1 = $_FILES["file1"];
    //print_r($file1);

    date_default_timezone_set("Asia/Kolkata");
    // process for uploading file
    $source = $file1["tmp_name"];
    $name = $file1["name"];
    $type = $file1["type"];
    $size = $file1["size"];
    $time = date("dmYhisa");
    $random = rand(100000, 999999);
    //$destination = "uploads/$time-$name";
    $destination = "uploads/$random-$time-$name";
    $mb = 2;
    $maxSize = ($mb * 1024 * 1024);
    //echo $maxSize;

    $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/svg", "image/gif"];

    if($size < $maxSize) {
        //echo "Valid FIle";
        if (in_array($type, $validTypes)) {
            // check for file existnace
            if (!file_exists($destination)) {
                // code for upload file
                move_uploaded_file($source, $destination);
                $_SESSION["msg"] = "$name File Uploaded";
            } else {
                $_SESSION["msg"] = "$name file already exist";
            }
        } else {
            $_SESSION["msg"] = "Please Upload Images Only ";
        }
    }else{
        $_SESSION["msg"] = "Please select file less then $mb MB";
    }
   header("location:pro7.php");
}
?>