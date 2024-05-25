<?php
require_once("commons/session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    require_once("commons/meta.php");
    require_once("commons/title.php");
    ?>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require_once("commons/sidebar.php"); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php
                require_once("commons/topbar.php");
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Images</h1>
                        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="history.back();"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Back</button>
                    </div>

                    <?php
                    //require_once("commons/datacount.php");
                    ?>

                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Add Image</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <!-- Custom Code Here -->
                                    <?php
                                    if (isset($_SESSION["msg"])) {
                                        echo $_SESSION["msg"];
                                        unset($_SESSION["msg"]);
                                    }
                                    ?>
                                    <div id="serviceForm">
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                                            <div class="my-3">
                                                <label for="imagetitle">Enter Image Title</label>
                                                <input type="text" name="imagetitle" id="imagetitle" class="form-control" required>
                                            </div>
                                            <div class="my-3">
                                                <label for="imagedescription">Enter Image Description</label>
                                                <input type="text" name="imagedescription" id="imagedescription" class="form-control" required>
                                            </div>
                                            <div class="my-3">
                                                <label for="file1">Select Image</label>
                                                <input type="file" name="file1" id="file1" class="form-control" required>
                                            </div>
                                            <div class="my-3">
                                                <label for="imagetype">Select Image Type</label>
                                                <select id="imagetype" name="imagetype" class="form-control">
                                                    <option value="1">Slider</option>
                                                    <option value="2">Gallery</option>
                                                </select>
                                            </div>
                                            <div class="my-3">
                                                <input type="submit" value="Add New Image" name="addProcess" class="btn btn-primary">
                                                <input type="reset" value="Reset" class="btn btn-danger">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php
            require_once("commons/footer.php");
            ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>
</html>

<?php
    if(isset($_POST["addProcess"])){
        require_once("classes/Images.class.php");
        $imagetitle = $images->filterData($_POST["imagetitle"]);
        $imagedescription = $images->filterData($_POST["imagedescription"]);
        $imagetype = $images->filterData($_POST["imagetype"]);

        $file1 = $_FILES["file1"];

        $name = $file1["name"];
        $source = $file1["tmp_name"];
        $type = $file1["type"];
        $random = rand(9999, 99999);
        $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/svg"];


        if(in_array($type, $validTypes)){
            if($imagetype == 1){
                $destination = "img/Slider $random $name";
            }else if($imagetype == 2){
                $destination = "img/Gallery $random $name";
            }

            $images->addNewImage($imagetitle, $imagedescription, $destination, $imagetype);

            move_uploaded_file($source, $destination);
        
            $images->logWriter($email, "$destination Image Uploaded on Server");

            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible fade show' role='alert'> <strong>Success : </strong> $destinations Image Uploded on Server.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></button></div>";
    
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Error : </strong> Must Select Valid Image File<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";    
        }

        header("location:addimage");
    }

    /// code for update status
    if(isset($_GET["status"])){
        $serviceid = $services->filterData($_GET["serviceid"]);
        $status = $services->filterData($_GET["status"]);

        $services->changeServiceStatus($serviceid, $status);
        header("location:services");
    }
?>