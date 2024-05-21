<?php
    require_once("commons/session.php");
    require_once("classes/SMTP.class.php");

    $result = $smtp->getSMTPConfig();

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
                        <h1 class="h3 mb-0 text-gray-800">SMTP Configuration</h1>
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

                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="my-3">
                                            <label for="smtphostname">Enter SMTP Hostname</label>
                                            <input type="text" class="form-control" name="smtphostname" id="smtphostname" value="<?= $smtphostname; ?>" required>
                                        </div>

                                        <div class="my-3">
                                            <label for="smtpusername">Enter SMTP Username</label>
                                            <input type="email" class="form-control" name="smtpusername" id="smtpusername" value="<?= $smtpusername; ?>" required>
                                        </div>

                                        <div class="my-3">
                                            <label for="smtppassword">Enter SMTP Password</label>
                                            <div class="input-group">
                                            <input type="password" class="form-control" name="smtppassword" id="smtppassword" value="<?= $smtppassword; ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-success" id="showpassbtn" type="button">Show</button>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="my-3">
                                            <label for="smtpsecure">Enter SMTP Secure Protocol</label>
                                            <input type="text" class="form-control" name="smtpsecure" id="smtpsecure" value="<?= $smtpsecure; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="smtpport">Enter SMTP Port Number</label>
                                            <input type="text" class="form-control" name="smtpport" id="smtpport" value="<?= $smtpport; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="otptimelimit">Enter OTP Time Limit (Minutes)</label>
                                            <input type="number" class="form-control" name="otptimelimit" id="otptimelimit" value="<?= $otptimelimit; ?>" min="1">
                                        </div>
                                      

                                        <div class="my-3">
                                            <input type="submit" value="Update" name="updateProcess" class="btn btn-primary">
                                            <input type="reset" value="Reset"  class="btn btn-danger">
                                        </div>
                                    </form>
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

    <!-- JQuery code for show password button -->

    <script>
        $(document).ready(function(){
            $("#showpassbtn").click(function(){
                const smtppassword = $("#smtppassword");

                if(smtppassword.attr("type") === "password"){
                    smtppassword.attr("type", "text");
                    $(this).removeClass("btn-success");
                    $(this).addClass("btn-danger");
                    $(this).text("Hide");
                }else{
                    smtppassword.attr("type", "password");
                    $(this).removeClass("btn-danger");
                    $(this).addClass("btn-success");
                    $(this).text("Show");
                }
            });
        });
    </script>
</body>
</html>

<?php
    if(isset($_POST["updateProcess"])){

        $smtphostname = $smtp->filterData($_POST["smtphostname"]);
        $smtpusername = $smtp->filterData($_POST["smtpusername"]);
        $smtppassword = $smtp->filterData($_POST["smtppassword"]);
        $smtpsecure = $smtp->filterData($_POST["smtpsecure"]);
        $smtpport = $smtp->filterData($_POST["smtpport"]);
        $otptimelimit = $smtp->filterData($_POST["otptimelimit"]);

        $smtp->updateSMTPConfig($smtphostname, $smtpusername, $smtppassword, $smtpsecure, $smtpport, $otptimelimit);

        $smtp->logWriter($email, "SMTP Configuration Updated to $smtphostname, $smtpusername, $smtppassword, $smtpsecure, $smtpport, $otptimelimit");
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>Success : </strong>  SMTP Configuration Updated in Database
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>    
        <span aria-hidden='true'>&times;</span></button></div>";
        header("location:smtp");
    }
?>