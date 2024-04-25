<?php 
    require_once("connection.php");

    $pid = $_GET["pid"];

    //echo $pid;

    $result = $dbconn->getPerson($pid);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $response = "<table>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                </tr>

                <tr>
                    <td>$row[id]</td>
                    <td>$row[fname]</td>
                    <td>$row[lname]</td>
                    <td>$row[city]</td>
                </tr>
            </table>";
        }

        echo $response;
    }else{
        echo "Invalid Person ID $pid";
    }
?>