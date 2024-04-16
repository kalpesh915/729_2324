<?php
    session_start();
    require_once("connection.php");

    // code for delete image
    if(isset($_GET["action"])){
        $action = $_GET["action"];
        $imageid = $_GET["imageid"];

        if($action == "delete"){
            $sqlquery = "select imagepath from images where imageid = $imageid";

            $result = $connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                // function for delete file
                unlink($row["imagepath"]);
            }

            // delete file entry from database
            $sqlquery = "delete from images where imageid = $imageid";
            $connection->query($sqlquery);

            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Success: </b> Image Deleted From Server.
            </div>";
        }
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <?php
            if(isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            }
        ?>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <div class="my-3">
                <label for="file1" class="form-label">Select Image for Uplaod : </label>
                <input type="file" name="file1" id="file1" required class="form-control">
            </div>

            <div class="my-3">
                <input type="submit" value="Upload Now" class="btn btn-primary" name="uploadProcess">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form><hr>
        <div class="row">
        <?php 
            $sqlquery = "select * from images";
            $result = $connection->query($sqlquery);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<div class='col-md-3 my-2'>
                        <img src='$row[imagepath]' class='img-fluid w-100'>
                        <hr>
                        <button class='btn btn-danger' onclick='deleteImage($row[imageid])'>Delete</button>
                    </div>";
                }
            }else{
                echo "<hr>No Images found on Server<hr>";
            }
        ?>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST["uploadProcess"])){
        // get file from form
        $file1 = $_FILES["file1"];

        // list of valid file types 
        $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/svg"];

        // valid size of file
        $mb = 2;
        $validSize = ($mb * 1024 * 1024);

        // get data from uploaded file
        $name = $file1["name"];
        $source = $file1["tmp_name"];
        $date = date("d-m-Y_h-i-sa");
        $random = rand(9999, 99999);
        $size = $file1["size"];
        $type = $file1["type"];
        $destination = "uploads/$date $random $name";

        // check for valid file size
        if($size < $validSize){
            // check for valid file type
            if(in_array($type, $validTypes)){
                // check for file existance
                if(!file_exists($destination)){
                    // code for upload file
                    if(move_uploaded_file($source, $destination)){
                        $sqlquery = "insert into images (imagename, imagepath) values ('$name', '$destination')";
                        $connection->query($sqlquery);
                        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                            <button class='btn-close' data-bs-dismiss='alert'></button>
                            <b>Success: </b> $name File Uplaoded on Server.
                        </div>";
                    }else{
                        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                            <button class='btn-close' data-bs-dismiss='alert'></button>
                            <b>Error : </b> Error While Uploading File
                        </div>";
                    }
                }else{
                    $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                        <button class='btn-close' data-bs-dismiss='alert'></button>
                        <b>Error : </b> $name file already exist on server.
                    </div>";
                }
            }else{
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                    <button class='btn-close' data-bs-dismiss='alert'></button>
                    <b>Error : </b> Invalid File Type Must Select Image to Upload.
                </div>";    
            }
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> Please Select File less Then $mb Mb.
            </div>";
        }

       header("location:index.php");
    }
?>

<script>
    function deleteImage(imageid){
        //alert(imageid);
        if(confirm("Are you Sure to Delete This File ?")){
            window.location.assign("index.php?action=delete&imageid="+imageid);
        }else{
            alert("Nothing Deleted");
        }
    }
</script>