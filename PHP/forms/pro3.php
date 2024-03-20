<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process3.php" method="post">
        <label for="fn">Enter First Name</label>
        <input type="text" name="fname" id="fn" required><br>
        <label for="ln">Enter Last Name</label>
        <input type="text" name="lname" id="ln" required><br>
        <input type="submit" value="Send Data">
        <input type="reset" value="Reset">
    </form>
</body>
</html>