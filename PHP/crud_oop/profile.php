<?php
    require_once("commons/session.php");
    require_once("classes/Users.class.php");

    $result = $users->getProfile($username);
    
    while($row = $result->fetch_assoc()){
        extract($row);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <?php require_once("commons/cdn.php"); ?>
</head>

<body>
    <?php require_once("commons/menu.php"); ?>
    <div class="container-fluid">
        <h2 class="text-center text-white bg-primary p-3">Update Profile</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
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
                        <div class="d-flex justify-content-center">
                            <img src="<?php echo $imagepath;?>" class='w-25 h-25 m-3 rounded-circle'>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name" required value="<?php echo $fname; ?>">
                                        <label for="fname" class="form-label">Enter First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name" required  value="<?php echo $lname; ?>">
                                        <label for="lname" class="form-label">Enter Last Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <input type="text" name="city" id="city" class="form-control" placeholder="Enter City Name" required value="<?php echo $city; ?>">
                                        <label for="city" class="form-label">Enter City</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <input type="text" name="state" id="state" class="form-control" placeholder="Enter State" required value="<?php echo $state; ?>">
                                        <label for="satate" class="form-label">Enter State</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone" required pattern="\d{10,13}" value="<?php echo $phone; ?>">
                                        <label for="phone" class="form-label">Enter Phone</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <select class="form-select" name="gender" id="gender">
                                            <option value="male" <?php echo ($gender == "male" ? "selected" : "")?>>Male</option>
                                            <option value="female" <?php echo ($gender == "female" ? "selected" : "")?>>Female</option>
                                        </select>

                                        <label for="gender" class="form-label">Select Gender</label>
                                    </div>
                                </div>
                            </div>

                            <div class="my-3 form-floating">
                                <input type="file" name="file1" id="file1" class="form-control" placeholder="Select Profile Photo">
                                <label for="file1" class="form-label">Select Profile Photo</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-3 d-flex justify-content-center">
                <input type="submit" value="Update Profile" class="btn btn-primary mx-2" name="updateProcess">
                <input type="reset" value="Reset" class="btn btn-danger mx-2">
            </div>
        </form>
    </div>
</body>
</html>

<?php 
    if(isset($_POST["updateProcess"])){
        $fname = $users->filterData($_POST["fname"]);
        $lname = $users->filterData($_POST["lname"]);
        $city = $users->filterData($_POST["city"]);
        $state = $users->filterData($_POST["state"]);
        $phone = $users->filterData($_POST["phone"]);
        $gender = $users->filterData($_POST["gender"]);
        $file1 = $_FILES["file1"];
    
        $users->updateProfile($username, $fname, $lname, $city, $state, $phone, $gender);

        if($file1["name"] !== ""){

            $imagename = $file1["name"];
            $source = $file1["tmp_name"];
            $type = $file1["type"];
            $size = $file1["size"];
            $validtypes = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/svg"];
            $mb = 2;
            $validsize = ($mb * 1024 * 1024);
            $random = rand(9999, 99999);
            $destination = "./assets/profileimages/$email $random $imagename";

            if(in_array($type, $validtypes)){
                if($size < $validsize){
                    
                    if($imagepath !== "./assets/profileimages/dummyimg.png"){
                        // delete existing image
                        unlink($imagepath);
                    }
                    move_uploaded_file($source, $destination);
                    $users->updateProfileImage($roll, $destination);
                    $users->logWriter($username, "Profile Photo Updated");
                    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                    <button class='btn-close' data-bs-dismiss='alert'></button>
                    <b>Success : </b> New User Created
                </div>";
                }else{
                    $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                    <button class='btn-close' data-bs-dismiss='alert'></button>
                    <b>Error : </b> Must Select Image Less then $mb Mb.
                </div>";    
                }
            }else{
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                    <button class='btn-close' data-bs-dismiss='alert'></button>
                    <b>Error : </b> Must Select Image File Only.
                </div>";        
            }
        }

        $users->logWriter($username, "User Profile Updated");
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <b>Success : </b> Profile Updated
        </div>";
        header("location:profile.php");
    }
?>