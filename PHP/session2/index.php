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
    <div class="container-fluid p-2">
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="my-3 form-floating">
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required>
                <label for="email" class="form-label">Enter Email Address</label>
            </div>
            <div class="my-3 form-floating">
                <input type="password" name="upass" id="upass" class="form-control" placeholder="Enter Password" required>
                <label for="upass" class="form-label">Enter Password</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Login" class="btn btn-primary" type="button" name="loginProcess">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
            <div class="my-3">
                <?php
                    // code for printing alert messages
                    // check for any messages are received or not
                    if(isset($_SESSION["msg"])){
                        // printing message and remove from session
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
    // condition for testing submit button pressed or not
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["loginProcess"])){

        // get data from $_POST
        $email = $_POST["email"];
        $upass = $_POST["upass"];

        //echo "$email $upass";

        // check for valid email address and password
        if($email == "admin@project.com" and $upass == "admin"){
            //echo "Valid Credentials";
            // create new usersession and store email address as value

            $_SESSION["username"] = $email;
            $_SESSION["last_activity"] = time();
            header("location:home.php");
        }else{
            //echo "Invalid Credentials";
            // create new message session if email and password does not match
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> Invalid Username or Password
            </div>";
            // redirect to login page
            header("location:index.php");
        }
    }
?>