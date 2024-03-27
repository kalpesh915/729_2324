<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="my-3 form-floating">
                <input type="email" name="email" id="email" placeholder="Enter Email Address" class="form-control">
                <label for="email" class="form-label">Enter Email Address</label>
            </div>
            <div class="my-3 form-floating">
                <input type="password" name="upass" id="upass" placeholder="Enter Password" class="form-control">
                <label for="upass" class="form-label">Enter Password</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Login" class="btn btn-primary" name="loginProcess">
                <input type="reset" value="Reset" class="btn btn-danger">
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
    // code to be execute when user submit the login form 

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["loginProcess"])){
        // receive data from form
        $email = $_POST["email"];
        $upass = $_POST["upass"];

        //echo "$email $upass";

        // check for username and password
        if($email == "admin@project.com" && $upass == "admin"){
            //echo "valid crenedtials";
            // create new login session
            $_SESSION["username"] = $email;
            // redirect to home page
            header("location:home.php");
        }else{
            //echo "invalid crenedtials";
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' type='button' data-bs-dismiss='alert'></button>
            <b>Error : </b>Invalid Username or Password</div>";
            header("location:index.php");
        }
    }
?>