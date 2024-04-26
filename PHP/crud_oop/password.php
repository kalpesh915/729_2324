<?php
    require_once("commons/session.php");
    require_once("classes/Users.class.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Logs</title>
    <?php require_once("commons/cdn.php"); ?>
</head>

<body>
    <?php require_once("commons/menu.php"); ?>
    <div class="container-fluid">
        <h2 class="text-center text-white bg-primary p-3">Change Password</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="my-3">
                <?php
                if (isset($_SESSION["msg"])) {
                    echo $_SESSION["msg"];
                    unset($_SESSION["msg"]);
                }
                ?>
            </div>
            <div id="accordion">
                <div class="card">
                    <div id="collapseBasic" class="collapse show" data-bs-parent="#accordion">
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="my-3 form-floating">
                                        <input type="password" name="upass" id="upass" class="form-control" placeholder="Enter Current Password" required >
                                        <label for="upass" class="form-label">Enter Current Password</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="my-3 form-floating">
                                        <input type="password" name="npass" id="npass" class="form-control" placeholder="Enter New Password" required >
                                        <label for="npass" class="form-label">Enter New Password</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="my-3 form-floating">
                                        <input type="password" name="cnpass" id="cnpass" class="form-control" placeholder="Enter Confirm Password" required >
                                        <label for="cnpass" class="form-label">Enter Confirm Password</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-3 d-flex justify-content-center">
                <input type="submit" value="Change Password" class="btn btn-primary mx-2" name="updateProcess">
                <input type="reset" value="Reset" class="btn btn-danger mx-2">
            </div>
        </form>
    </div>
</body>
</html>

<?php 
    if(isset($_POST["updateProcess"])){
        $upass = $users->filterData($_POST["upass"]);
        $npass = $users->filterData($_POST["npass"]);
        $cnpass = $users->filterData($_POST["cnpass"]);

        if($npass === $cnpass){
            $upass = sha1($upass);
            $npass = sha1($npass);
            if($users->userLogin($username, $upass)){
                $users->updatePasword($username, $npass);
                $users->logWriter($username, "Account Password Updated");
                $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Success : </b> Password Updated
                </div>";
            }else{
                $users->logWriter($username, "Invalid Attempt of Account Password Update");
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> Incorrect Current Password
                </div>";    
            }
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> Confirm Password does not match
            </div>";    
        }

        header("location:password.php");
    }
?>