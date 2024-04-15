<?php
    session_start();
    ob_start(); // output buffer start
    require_once("connection.php");
    $id = $_GET["id"];
    //echo $id;

    $sqlqeury = "select * from persons where id = $id";

    $result = $connection->query($sqlqeury);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            /*$fname = $row["fname"];
            $lname = $row["lname"];
            $city = $row["city"];*/
            //print_r($row);
            
            extract($row);
        }
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <b>Error : </b> Invalid ID for Update Data
        </div>";
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
            <h3 class="text-white bg-primary text-center p-3">Person Managment System</h3>
            <?php
                if(isset($_SESSION["msg"])){
                    echo $_SESSION["msg"];
                    unset($_SESSION["msg"]);
                }
            ?>
       
        <div id="addnewForm">
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="my-3 form-floating">
                <input type="text" name="fname" id="fname" required placeholder="Enter First Name" class="form-control" value="<?php echo $fname; ?>">
                <label for="fname" class="form-label">Enter First Name</label>
            </div>
            <div class="my-3 form-floating">
                <input type="text" name="lname" id="lname" required placeholder="Enter Last Name" class="form-control" value="<?php echo $lname; ?>">
                <label for="lname" class="form-label">Enter Last Name</label>
            </div>
            <div class="my-3 form-floating">
                <input type="text" name="city" id="city" required placeholder="Enter City" class="form-control" value="<?php echo $city; ?>">
                <label for="city" class="form-label">Enter City</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Save Data" class="btn btn-primary" name="saveData">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
        </div>
    </div>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["saveData"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $city = $_POST["city"];

        $sqlqeury = "update persons set fname = '$fname', lname = '$lname', city = '$city' where id = $id";

        if($connection->query($sqlqeury) === true){
            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Success : </b> Person Updated Successfully
            </div>";
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> Error while Updating Person in Database
            </div>";
        }
        header("location:index.php");
    }
?>