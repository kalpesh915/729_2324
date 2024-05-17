<?php
require_once("commons/session.php");
require_once("classes/Team.class.php");
$teamid = $team->filterData($_GET["teamid"]);
$result = $team->getSingleMember($teamid);

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
                        <h1 class="h3 mb-0 text-gray-800">Manage Team</h1>
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
                                    if (isset($_SESSION["msg"])) {
                                        echo $_SESSION["msg"];
                                        unset($_SESSION["msg"]);
                                    }
                                    ?>
                                    <div id="teamForm">
                                        <div class="text-center">
                                            <img src="<?= $memberphoto; ?>" class="w-50 rounded-circle">
                                        </div>
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?teamid=$teamid"; ?>" method="post" enctype="multipart/form-data">
                                            <div class="my-3">
                                                <label for="membername">Enter Team Member Name</label>
                                                <input type="text" name="membername" id="membername" class="form-control" required value="<?= $membername; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="memberdesignation">Enter Designation</label>
                                                <input type="text" name="memberdesignation" id="memberdesignation" class="form-control" required  value="<?= $memberdesignation; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="memberdescription">Enter Description</label>
                                                <input type="text" name="memberdescription" id="memberdescription" class="form-control" required  value="<?= $memberdescription; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="memberfacebook">Enter URL of Facebook</label>
                                                <input type="url" name="memberfacebook" id="memberfacebook" class="form-control"  value="<?= $memberfacebook; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="memberinstagram">Enter URL of Instagram </label>
                                                <input type="url" name="memberinstagram" id="memberinstagram" class="form-control"  value="<?= $memberinstagram; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="membertwitter">Enter URL of Twitter</label>
                                                <input type="url" name="membertwitter" id="membertwitter" class="form-control"  value="<?= $membertwitter; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="memberlinkedin">Enter URL of Linkedin</label>
                                                <input type="url" name="memberlinkedin" id="memberlinkedin" class="form-control"  value="<?= $memberlinkedin; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="memberyoutube">Enter URL of Youtube</label>
                                                <input type="url" name="memberyoutube" id="memberyoutube" class="form-control"  value="<?= $memberyoutube; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="membersnapchat">Enter URL of Snapchat</label>
                                                <input type="url" name="membersnapchat" id="membersnapchat" class="form-control"  value="<?= $membersnapchat; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="membertelegram">Enter URL of Telegram</label>
                                                <input type="url" name="membertelegram" id="membertelegram" class="form-control"  value="<?= $membertelegram; ?>">
                                            </div>
                                            <div class="my-3">
                                                <label for="memberphoto">Select Member Photo </label>
                                                <input type="file" name="memberphoto" id="memberphoto" class="form-control" accept=".jpg, .jpeg, .png, .svg">
                                            </div>
                                            <div class="my-3">
                                                <input type="submit" value="Update Member" name="updateProcess" class="btn btn-primary">
                                                <input type="reset" value="Reset" class="btn btn-danger">
                                            </div>
                                        </form>
                                    </div>
                                    <form id="deleteForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?delete=1&teamid=$teamid";?>">
                                        <input type="button" class="btn btn-danger" value="Delete This Team Member" onclick="confirmDelete()">
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>


<script>
    function confirmDelete(){
        if(confirm("are you sure to delete this Team member ?")){
            document.getElementById("deleteForm").submit();
        }
    }
</script>
</html>

<?php
    if(isset($_POST["updateProcess"])){
        $membername = $team->filterData($_POST["membername"]);
        $memberdesignation = $team->filterData($_POST["memberdesignation"]);
        $memberdescription = $team->filterData($_POST["memberdescription"]);
        $memberfacebook = $team->filterData($_POST["memberfacebook"]);
        $memberinstagram = $team->filterData($_POST["memberinstagram"]);
        $membertwitter = $team->filterData($_POST["membertwitter"]);
        $memberlinkedin = $team->filterData($_POST["memberlinkedin"]);
        $memberyoutube = $team->filterData($_POST["memberyoutube"]);
        $membersnapchat = $team->filterData($_POST["membersnapchat"]);
        $membertelegram = $team->filterData($_POST["membertelegram"]);

        $memberphoto = $_FILES["memberphoto"];
        $destination = null;


        // check for file is selected or not 

        if($memberphoto["name"] !== null){
            $filename = $memberphoto["name"];
            $source = $memberphoto["tmp_name"];
            $random = rand(9999, 99999);
            $destination = "img/team/$membername $random $filename";
            $type = $memberphoto["type"];
            $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/svg"];
            if(in_array($type, $validTypes)){
                move_uploaded_file($source, $destination);
            }else{  
                $destination = null;
                $error = true;
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Error : </strong> Must Select Valid File Only.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";    
            }
        }
        
        $team->updateTeamMember($teamid, $membername, $memberdesignation, $memberdescription, $memberfacebook, $memberinstagram, $membertwitter, $memberlinkedin, $memberyoutube, $membersnapchat, $membertelegram, $destination);

        $team->logWriter($email, "$membername Team Member Updated in Database");
        if($error){
            $_SESSION["msg"] = "<div class='alert alert-info alert-dismissible fade show' role='alert'> <strong>Success : </strong> $membername Team Updated in Database, Image not Updated deu to Invalid file format<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        }else{
            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible fade show' role='alert'> <strong>Success : </strong> $membername Team Updated in Database<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        }
        
        
        header("location:editteam?teamid=$teamid");
    }

    /// code for delete status
    if(isset($_GET["delete"])){
        $teamid = $team->filterData($_GET["teamid"]);
        $team->deleteTeamMember($teamid);
        $team->logWriter($email, "$membername team member Deleted");
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible fade show' role='alert'> <strong>Success : </strong> $membername Team Member Deleted From  Database<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        header("location:team");
    }
?>