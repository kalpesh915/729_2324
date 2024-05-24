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

                    if(isset($_POST["deleteProcess"])){
                        $password = sha1($counters->filterData($_POST["password"]));
                        $selection = $counters->filterData($_POST["selection"]);

                        if($counters->deleteLogs($email, $password, $selection)){
                            $counters->logWriter($email, "Log Messages Deleted");
                        }else{
                            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Error : </strong> Incorrect Password <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                        }
                    }
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">All Logs</h1>
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
                                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                                    <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#myModal">Delete Logs</button>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <!-- Custom Code Here -->
                                    <?php 
                                        if(isset($_SESSION["msg"])){
                                            echo $_SESSION["msg"];
                                            unset($_SESSION["msg"]);
                                        }
                                    ?>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Log Time</th>
                                                    <th>Log Message</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Log Time</th>
                                                    <th>Log Message</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                    $result = $counters->getAllLogs();

                                                    while($row = $result->fetch_assoc()){
                                                        echo "<tr>
                                                            <td>$row[logtime]</td>
                                                            <td>$row[logmessage]</td>
                                                        </tr>";
                                                    }

                                                    $counters->markAllRead();
                                                ?>
                                            </tbody>
                                        </table>
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

    <!-- Page level custom scripts -->

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete Activity Logs</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="my-3">
                    <label for="upass">Enter Current Password </label>
                    <input type="password" name="password" id="password" required class="form-control">
                </div>
                <div class="my-3">
                    <label for="selection">Select What to Delete </label>
                    <select name="selection" id="selection" required class="form-control">
                        <option></option>
                        <option value="1">Login and Logout Logs</option>
                        <option value="2">All Logs</option>
                    </select>
                </div>
                <div class="my-3">
                    <input type="submit" value="Delete Logs" class="btn btn-danger" name="deleteProcess">
                </div>
            </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

</body>

</html>
<script>
    $('#dataTable').DataTable({
        order:[[0, 'desc']]
    });
</script>
<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

