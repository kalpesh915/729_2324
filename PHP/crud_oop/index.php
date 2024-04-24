<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php require_once("commons/cdn.php"); ?>
</head>
<body>
    <div class="container-fluid">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h1 class="text-white bg-primary p-3 text-center">Login Form</h1>

            <div class="my-3 form-floating">
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required>
                <label for="email" class="form-label">Enter Email Address</label>
            </div>

            <div class="my-3 form-floating">
                <input type="password" name="upass" id="upass" class="form-control" placeholder="Enter Password" required>
                <label for="upass" class="form-label">Enter Password</label>
            </div>

            <div class="my-3 d-flex justify-content-center">
                <input type="submit" value="Login" class="btn btn-primary mx-2" name="loginProcess">
                <input type="reset" value="Reset" class="btn btn-danger mx-2">
                <a href="signup.php" class="btn btn-info mx-2">Sign up</a>
            </div>

            <div class="my-3">
                <?php
                    if(isset($_SESSION["msg"])){
                        echo $_SESSION["msg"];
                        unset($_SESSION["msg"]);
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST["loginProcess"])){
        require_once("classes/Users.class.php");

        $email = $users->filterData($_POST["email"]);
        $upass = sha1($users->filterData($_POST["upass"]));

        //echo "$email $upass";
        $result = $users->userLogin($email, $upass);
        //var_dump($result);

        if($result === true){
            $users->logWriter($email, 'Login Successfully');
            $_SESSION["validuser"] = $email;
            header("location:home.php");
        }else{
            $users->logWriter($email, 'Invalid Login Attempt');
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> Invalid Username or Password
            </div>";

            header("location:index.php");
        }
    }
?>