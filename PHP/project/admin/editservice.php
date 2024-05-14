<?php
require_once("commons/session.php");
require_once("classes/Services.class.php");
$serviceid = $services->filterData($_GET["serviceid"]);
$result = $services->getSingleServices($serviceid);

while($row = $result->fetch_assoc()){
    extract($row);
}
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
                        <h1 class="h3 mb-0 text-gray-800">Manage Services</h1>
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
                                    <h6 class="m-0 font-weight-bold text-primary">Edit Service</h6>
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
                                        <h1 class="text-center display-1">
                                            <i class="<?= $serviceicon; ?>"></i>
                                        </h1>
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?serviceid=$serviceid"; ?>" method="post">
                                            <div class="my-3">
                                                <label for="servicetitle">Enter Service Title</label>
                                                <input type="text" name="servicetitle" id="servicetitle" class="form-control" required value="<?= $servicetitle; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="servicedescription">Enter Service Description</label>
                                                <input type="text" name="servicedescription" id="servicedescription" class="form-control" required value="<?= $servicedescription; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="serviceicon">Enter Service Icon</label>
                                                <input type="text" name="serviceicon" id="serviceicon" class="form-control" required value="<?= $serviceicon; ?>">
                                            </div>
                                            <div class="my-3">
                                                <input type="submit" value="Update Service" name="updateProcess" class="btn btn-primary">
                                                <input type="reset" value="Reset" class="btn btn-danger">
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#info">How to Find Icon</button>
                                            </div>
                                        </form>
                                        <hr>
                                        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])."?delete=1&serviceid=$serviceid"?>" method="post" id="deleteForm">
                                            <input type="button" class="btn btn-danger" onclick="confirmDelete()" value="Delete Service">
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

<!-- The Modal -->
<div class="modal" id="info">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Find Icon For Service</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Open Following URL for Icons 
        <a href="https://fontawesome.com/v4/icons/" target="_blank">Click Here</a><br>
        Serach required Icon from Page and Add Class Name to Service Icon Box
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</html>

<script>
    function confirmDelete(){
        if(confirm("Are you sure to delete this Service ?")){
            document.getElementById("deleteForm").submit();
        }
    }
</script>

<?php
    if(isset($_POST["updateProcess"])){
        $servicetitle = $services->filterData($_POST["servicetitle"]);
        $servicedescription = $services->filterData($_POST["servicedescription"]);
        $serviceicon = $services->filterData($_POST["serviceicon"]);

        $services->updateService($serviceid, $servicetitle, $servicedescription, $serviceicon);
        $services->logWriter($email, "$servicetitle Service Updated in Database");
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible fade show' role='alert'> <strong>Success : </strong> $servicetitle Service Updated in Database
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
        header("location:editservice?serviceid=$serviceid");
    }

    /// code for delete Service
    if(isset($_GET["delete"])){
        $serviceid = $services->filterData($_GET["serviceid"]);

        $services->deleteService($serviceid);
        header("location:services");
    }
?>