<?php
    session_start();
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
    <?php require_once("commons/cdn.php"); ?>
</head>

<body>
    <div class="container-fluid">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <h1 class="text-white bg-primary p-3 text-center">Signup Form</h1>
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
                    <div class="card-header">
                        <a class="btn" data-bs-toggle="collapse" href="#collapseBasic">
                            Basic Information
                        </a>
                    </div>
                    <div id="collapseBasic" class="collapse show" data-bs-parent="#accordion">
                        <div class="card-body">
                            <div class="my-3 form-floating">
                                <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name" required>
                                <label for="fname" class="form-label">Enter First Name</label>
                            </div>

                            <div class="my-3 form-floating">
                                <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name" required>
                                <label for="lname" class="form-label">Enter Last Name</label>
                            </div>

                            <div class="my-3 form-floating">
                                <input type="text" name="city" id="city" class="form-control" placeholder="Enter City Name" required>
                                <label for="city" class="form-label">Enter City</label>
                            </div>

                            <div class="my-3 form-floating">
                                <input type="text" name="state" id="state" class="form-control" placeholder="Enter State" required>
                                <label for="satate" class="form-label">Enter State</label>
                            </div>

                            <div class="my-3 form-floating">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone" required pattern="\d{10,13}">
                                <label for="phone" class="form-label">Enter Phone</label>
                            </div>

                            <div class="my-3 form-floating">
                                <select class="form-select" name="gender" id="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                
                                <label for="gender" class="form-label">Select Gender</label>
                            </div>

                            <div class="my-3 form-floating">
                                <input type="file" name="file1" id="file1" class="form-control" placeholder="Select Profile Photo" required>
                                <label for="file1" class="form-label">Select Profile Photo</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="btn" data-bs-toggle="collapse" href="#collapseLogin">
                            Login Information
                        </a>
                    </div>
                    <div id="collapseLogin" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <div class="my-3 form-floating">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required>
                                <label for="email" class="form-label">Enter Email Address</label>
                            </div>

                            <div class="my-3 form-floating">
                                <input type="password" name="upass" id="upass" class="form-control" placeholder="Enter Password" required>
                                <label for="upass" class="form-label">Enter Password</label>
                            </div>

                            <div class="my-3 form-floating">
                                <input type="password" name="cpass" id="cpass" class="form-control" placeholder="Enter Password" required>
                                <label for="cpass" class="form-label">Enter Confirm Password</label>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="my-3 d-flex justify-content-center">
                    <input type="submit" value="Create Account" class="btn btn-primary mx-2" name="signupProcess">
                    <input type="reset" value="Reset" class="btn btn-danger mx-2">
                    <a href="index.php" class="btn btn-info mx-2">Login</a>
                </div>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST["signupProcess"])) {
    require_once("classes/Users.class.php");

    // collect user form data
    $fname = $users->filterData($_POST["fname"]);
    $lname = $users->filterData($_POST["lname"]);
    $city = $users->filterData($_POST["city"]);
    $state = $users->filterData($_POST["state"]);
    $phone = $users->filterData($_POST["phone"]);
    $gender = $users->filterData($_POST["gender"]);
    $file1 = $_FILES["file1"];
    $email = $users->filterData($_POST["email"]);
    $upass = sha1($users->filterData($_POST["upass"]));
    $cpass = sha1($users->filterData($_POST["cpass"]));


    // check for password and confirm password match
    if($cpass === $upass){
        $roll = $users->signUp($fname, $lname, $city, $state, $phone, $email, $upass, $gender);

        //echo $roll;
        if($roll == 0){
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> $email is already registered with us.
            </div>";
        }else{
            // code for upload image
            $imagename = $file1["name"];
            $source = $file1["tmp_name"];
            $type = $file1["type"];
            $size = $file1["size"];
            $validtypes = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/svg"];
            $mb = 2;
            $validsize = ($mb * 1024 * 1024);
            $random = rand(9999, 99999);
            $destination = "./assets/profileimages/$email $random $imagename";

            // 
            if(in_array($type, $validtypes)){
                if($size < $validsize){
                    move_uploaded_file($source, $destination);
                    $users->addProfileImage($roll, $destination);
                    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                    <button class='btn-close' data-bs-dismiss='alert'></button>
                    <b>Success : </b> New User Created
                </div>";
                }else{
                    $users->addDummyImage($roll);
                    $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                    <button class='btn-close' data-bs-dismiss='alert'></button>
                    <b>Error : </b> Must Select Image Less then $mb Mb.
                </div>";    
                }
            }else{
                $users->addDummyImage($roll);
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                    <button class='btn-close' data-bs-dismiss='alert'></button>
                    <b>Error : </b> Must Select Image File Only.
                </div>";        
            }
        }
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <b>Error : </b> Confirm Password Does not Match.
        </div>";
    }
    header("location:signup.php");
}
?>