<?php
    session_start();
    ob_start();
    require_once("classes/Forgot.class.php");
    // set time zone
    date_default_timezone_set("Asia/Kolkata");

    if(isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error : </strong> Invalid Attempt of Change Password
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span></button></div>";
        header("location:index");
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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Enter New Password</h1>
                                       
                                    </div>
                                    <?php
                                        if(isset($_SESSION["msg"])){
                                            echo $_SESSION["msg"];
                                            unset($_SESSION["msg"]);
                                        }
                                    ?>
                                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        
                                    <div class="my-3">
                                    <label for="npass" class="form-label">Enter New Password</label>
                                    <input type="password" name="npass" id="npass" required class="form-control" >
                                </div>
                                <div class="my-3">
                                    <label for="cnpass" class="form-label">Enter Confirm Password</label>
                                    <input type="password" name="cnpass" id="cnpass" required class="form-control" >
                                </div>
                                <div class="my-3">
                                    <input type="submit" value="Update" name="updateProcess" class="btn btn-primary">
                                    <input type="reset" value="Reset" class="btn btn-danger">
                                </div>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>

<?php
    // code for password reset process

    if(isset($_POST["updateProcess"])){
        $npass = $forgot->filterData($_POST["npass"]);
        $cnpass = $forgot->filterData($_POST["cnpass"]);

        if($npass === $cnpass){
            $npass = sha1($npass);
            $forgot->changePassword($email, $npass);
            $forgot->logWriter($email, "Password Reset Successfully");
            header("location:home");
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Error : </strong> Confirm Password does not match
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></button></div>";
            header("location:changepassword");
        }
    }
?>