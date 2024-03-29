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
        if(isset($_SESSION["msg"])){
            echo "<hr>".$_SESSION["msg"]."<hr>";
            unset($_SESSION["msg"]);
        }
   ?>
</body>
</html>

<?php
    /*
        PHP File Upload : check for only images
        MIME : Multipurpose Internet Mail Extension
        image/jpg | image/jpeg | image/png | image/svg | image/gif
    */ 

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["uploadProcess"])){
        // get file data from HTML form.
        $file1 = $_FILES["file1"];
        print_r($file1);

        // process for uploading file
        $source = $file1["tmp_name"]; 
        $name = $file1["name"]; 
        $type = $file1["type"];
        $destination = "uploads/$name";

        $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/svg", "image/gif"];

        if(in_array($type, $validTypes)){
            // check for file existnace
            if(!file_exists($destination)){
                // code for upload file
                move_uploaded_file($source, $destination);
                $_SESSION["msg"] = "$name File Uploaded";
            }else{
                $_SESSION["msg"] = "$name file already exist";    
            }
            
        }else{
            $_SESSION["msg"] = "Please Upload Images Only ";
        }

        header("location:pro5.php");
    }
?>