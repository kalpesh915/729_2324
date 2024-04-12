<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "mydb";
$pagesize = 10;

if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page = 0;
}
//echo $page;

$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    die("<hr> Connection Failed " . $connection->connect_error);
} else {
    // count how many records in table
    $sqlquery = "select count(roll) from students";
    $countResult = $connection->query($sqlquery);

    while ($countRow = $countResult->fetch_assoc()) {
        $count = $countRow["count(roll)"];
    }

    //echo "Total Records are $count";
    $pages = ceil($count / $pagesize);

    // echo "Total Pages are $pages";
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
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Roll No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Gender</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $offset = ($page * $pagesize);
                        $sqlquery = "select * from students limit $pagesize offset $offset";

                        $result = $connection->query($sqlquery);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<tr>
                                    <td>$row[roll]</td>
                                    <td>$row[fname]</td>
                                    <td>$row[lname]</td>
                                    <td>$row[city]</td>
                                    <td>$row[state]</td>
                                    <td>$row[phone]</td>
                                    <td>$row[email]</td>
                                    <td>$row[gender]</td>
                                </tr>";
                            }
                        }else{
                            echo "<hr>No Data Found<hr>";
                        }
                    ?>
                </tbody>
            </table>

            <hr>
            <ul class="pagination justify-content-center">
                <?php 
                    for($x = 0; $x < $pages; $x++){
                        echo "<li class='page-item'><a class='page-link' href='pro16_new.php?page=$x'>".($x+1)."</a></li>";
                    }
                    
                ?>
            </ul>
        </div>
    </div>
</body>

</html>