<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1'>
        <thead>
            <tr>
                <th>Roll</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>City</th>
                <th>State</th>
                <th>Phone</th>
                <th>EMail</th>
                <th>Gender</th>
            </tr>
        </thead>

        <tbody>
        <?php
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    try{
        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            throw new Exception("Error while connecting Database Server ".$connection->connect_error);
        }else{
            $sqlquery = "select * from students";

            $result = $connection->query($sqlquery);

            //print_r($result);

            // check how many rows receive in result
            if($result->num_rows > 0){
                // run loop and get one by one rows as associative array
                while($row = $result->fetch_assoc()){
                    //echo "<hr> Welcome {$row['fname']} {$row['lname']} to {$row['city']} of {$row['state']} your roll no. is {$row['roll']} and contact details are {$row['email']} {$row['phone']}";
                    //print_r($row);

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
                echo "<hr> No Data Found in Table";
            }
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }
?>
        </tbody>
    </table>
</body>
</html>
