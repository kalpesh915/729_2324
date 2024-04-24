<?php 
    require_once("commons/session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Logs</title>
    <?php require_once("commons/cdn.php"); ?>
</head>
<body>
    <?php require_once("commons/menu.php"); ?>
    <div class="container-fluid">
        <h2 class="text-center text-white bg-primary p-3">User Logs</h2>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Event Time</th>
                        <th>Event</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        require_once("classes/Users.class.php");
                        $result = $users->getUserLogs($username);

                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                                <td>$row[eventtime]</td>
                                <td>$row[eventmessage]</td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
