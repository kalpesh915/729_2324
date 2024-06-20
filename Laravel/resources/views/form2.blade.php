<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/process2">
        @csrf
        <label for="fname">Enter First Name</label>
        <input type="text" name="fname" id="fname" required><br>
        <label for="lname">Enter Last Name</label>
        <input type="text" name="lname" id="lname" required><br>
        <input type="submit" value="Send Data">
    </form>
</body>
</html>