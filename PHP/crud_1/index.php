<?php
    session_start();
    require_once("connection.php");
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
        <button class="btn btn-info" data-bs-toggle="collapse" data-bs-target="#addnewForm">Add New</button>
        <div class="collapse" id="addnewForm">
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="my-3 form-floating">
                <input type="text" name="fname" id="fname" required placeholder="Enter First Name" class="form-control">
                <label for="fname" class="form-label">Enter First Name</label>
            </div>
            <div class="my-3 form-floating">
                <input type="text" name="lname" id="lname" required placeholder="Enter Last Name" class="form-control">
                <label for="lname" class="form-label">Enter Last Name</label>
            </div>
            <div class="my-3 form-floating">
                <input type="text" name="city" id="city" required placeholder="Enter City" class="form-control">
                <label for="city" class="form-label">Enter City</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Send Data" class="btn btn-primary" name="sendData">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
        </div>

        <div class="table-responsive mt-4">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $sqlquery = "select * from persons";

                        $result = $connection->query($sqlquery);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<tr>
                                    <td>$row[id]</td>
                                    <td>$row[fname]</td>
                                    <td>$row[lname]</td>
                                    <td>$row[city]</td>
                                    <td>
                                        <a href='editperson.php?id=$row[id]' class='btn btn-primary'>Edit</a>
                                        <a href='deleteperson.php?id=$row[id]' class='btn btn-danger'>Delete</a>
                                    </td>
                                </tr>";
                            }
                        }else{
                            echo "<tr>
                                <th colspan='5'>No Data Found in Table</th>
                            <tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sendData"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $city = $_POST["city"];

        $sqlqeury = "insert into persons (fname, lname, city) values ('$fname', '$lname', '$city')";

        if($connection->query($sqlqeury) === true){
            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Success : </b> New Person Created in Database
            </div>";
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> Error while adding New Person in Database
            </div>";
        }
        header("location:index.php");
    }
?>