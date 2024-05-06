<?php
    require_once("commons/session.php");
    require_once("classes/Social.class.php");

    $result = $social->getSocialLinks();

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
                        <h1 class="h3 mb-0 text-gray-800">Social Media Links</h1>
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
                                            <label for="facebook">Enter Facebook Link</label>
                                            <input type="url" class="form-control" name="facebook" id="facebook" value="<?= $facebook; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="twitter">Enter Twitter Link</label>
                                            <input type="url" class="form-control" name="twitter" id="twitter" value="<?= $twitter; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="instagram">Enter Instagram Link</label>
                                            <input type="url" class="form-control" name="instagram" id="instagram" value="<?= $instagram; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="whatsapp">Enter Whatsapp Link</label>
                                            <input type="url" class="form-control" name="whatsapp" id="whatsapp" value="<?= $whatsapp; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="telegram">Enter Telegram Link</label>
                                            <input type="url" class="form-control" name="telegram" id="telegram" value="<?= $telegram; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="snapchat">Enter Snapchat Link</label>
                                            <input type="url" class="form-control" name="snapchat" id="snapchat" value="<?= $snapchat; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="youtube">Enter Youtube Link</label>
                                            <input type="url" class="form-control" name="youtube" id="youtube" value="<?= $youtube; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="linkedin">Enter Linkedin Link</label>
                                            <input type="url" class="form-control" name="linkedin" id="linkedin" value="<?= $linkedin; ?>">
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

    <!-- Page level custom scripts -->

</body>
</html>

<?php
    if(isset($_POST["updateProcess"])){
        $facebook = $social->filterData($_POST["facebook"]);
        $twitter = $social->filterData($_POST["twitter"]);
        $instagram = $social->filterData($_POST["instagram"]);
        $whatsapp = $social->filterData($_POST["whatsapp"]);
        $telegram = $social->filterData($_POST["telegram"]);
        $snapchat = $social->filterData($_POST["snapchat"]);
        $youtube = $social->filterData($_POST["youtube"]);
        $linkedin = $social->filterData($_POST["linkedin"]);
        
        $social->updateSocialMedia($facebook, $twitter, $instagram, $whatsapp, $telegram, $snapchat, $youtube, $linkedin);

        $social->logWriter($email, "Socail Media Links Updated to :  $facebook, $twitter, $instagram, $whatsapp, $telegram, $snapchat, $youtube, $linkedin");
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>Success : </strong>  Social Media Links are Updated
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>    
        <span aria-hidden='true'>&times;</span></button></div>";
        header("location:social.php");
    }
?>