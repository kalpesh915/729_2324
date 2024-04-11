<?php
    if(isset($_GET["page"])){
        $page = $_GET["page"];
    }else{
        $page = 0;
    }

    //echo "Current Page is $page";

    // create required variable for database connection
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    $pageSize = 10;

    // create connection
    $connection = new mysqli($hostname, $username, $password, $database);

    // check for connection errors
    if($connection->connect_error){
        die("Error while connting with Server ".$connection->connect_error);
    }else{
        // count how many records in table
        $sqlquery = "select count(*) from students";
        $result = $connection->query($sqlquery);

        while($countResult = $result->fetch_assoc()){
            $totalRows = $countResult["count(*)"];
        }

        //echo $totalRows;
        // count how many pages 
        $pages = ceil($totalRows / $pageSize);
        //echo $pages;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Pagiantion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <table class="table table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Roll</th>
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
                    // calculating offset
                    $offset = $page * $pageSize;
                    $sqlquery = "select * from students limit $pageSize offset $offset";

                    // getting result
                    $result = $connection->query($sqlquery);

                    // printing result
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
                ?>
            </tbody>
        </table>

        <hr>
        <ul class="pagination justify-content-center">
            <?php
                // printing pagination links
                for($x=0; $x<$pages; $x++){
                    echo "<li class='page-item'><a class='page-link' href='pro16.php?page=$x'>".($x + 1)."</a></li>";
                }
            ?>
        </ul> 
    </div>
</body>
</html>
<?php
    $connection->close();
?>