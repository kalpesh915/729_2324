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
        <h2 class="text-center text-white bg-primary p-3">Delete Account</h2>

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
                                        <input type="password" name="upass" id="upass" class="form-control" placeholder="Enter Current Password" required>
                                        <label for="upass" class="form-label">Enter Current Password</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-3 d-flex justify-content-center">
                <input type="submit" value="Delete Account" class="btn btn-danger mx-2" name="deleteProcess">
                <input type="reset" value="Reset" class="btn btn-danger mx-2">
            </div>
        </form>

        <?php
        if (isset($_SESSION["confirm"])) {
            echo "<form method='post'>
                <div class='d-grid'>
                    <input type='submit' value='Confirm to Delete Account?' class='btn btn-danger btn-block' name='confirm'>
                    </div>
                </form>";
            unset($_SESSION["confirm"]);
        }
        ?>
    </div>
</body>

</html>

<?php
if (isset($_POST["deleteProcess"])) {
    $upass = $users->filterData($_POST["upass"]);

    $upass = sha1($upass);
    if ($users->userLogin($username, $upass)) {
        $_SESSION["confirm"] = "done";
    } else {
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> Incorrect Current Password
                </div>";
    }
    header("location:delete.php");
}

if (isset($_POST["confirm"])) {
    $users->deleteProfile($username);

    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Success : </b> $username Account Deleted
                </div>";
    header("location:index.php");
}

?>