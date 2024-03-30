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
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" onsubmit="return validate()">
        <input type="file" name="file1[]" id="file1" required accept=".jpg, .png, .gif" multiple>
        <input type="submit" value="Upload File" name="uploadProcess" >
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

<script>
    // code for check maximum file selection 
    function validate(){
        const fileIP = document.getElementById("file1");
        //alert(fileIP.files.length);
        if(fileIP.files.length > 5){
            alert("Maximum 5 Files are Allowed");
            return false;
        }else{
            return true;
        }
    }
</script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["uploadProcess"])) {
    // receive files array from form
    $files = $_FILES["file1"];
    // count how many files are selected
    $count = count($files["name"]);
    // list of valid file MIME types
    $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/svg", "image/gif"];

    // required variables for messages and filesize check
    $validfiles = 0;
    $invalidfiles = 0;
    $oversize = 0;
    $existfile = 0;
    $mb = 2;
    $validFileSize = ($mb * 1024 * 1024);

    //echo "Total Selected files are $count";

    // loop for get one by one file from array and do upload process
    for ($i = 0; $i < $count; $i++) {

        // get data from uploaded file
        $source = $files["tmp_name"][$i];
        $name = $files["name"][$i];
        $size = $files["size"][$i];
        $type = $files["type"][$i];
        $random = rand(1000, 9999);
        $destination = "uploads/$random - $name";

        // check  for file existance
        if (!file_exists($destination)) {
            // check for valid file type
            if (in_array($type, $validTypes)) {
                // check for valid size
                if ($size < $validFileSize) {
                    move_uploaded_file($source, $destination);
                    $validfiles++;
                } else {
                    $oversize++;
                }
            } else {
                $invalidfiles++;
            }
        }else{
            $existfile++;
        }
    }

    $_SESSION["msg"] = "<div>
        <b>Message : </b> Total Selected Files are $count <br> Successfully Uploaded files are $validfiles <br>Invalid File Extention are $invalidfiles <br> Over Sized Files are $oversize <br> Already Exist files are $existfile
    </div>";

    header("location:pro10.php");
}
?>

