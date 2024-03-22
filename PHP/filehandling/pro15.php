<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label for="fname">Enter File Name : </label>
        <input type="text" name="fname" id="fname" required><br>
        <input type="submit" value="Read File" name="process">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if(isset($_POST["process"])){
        $fname = $_POST["fname"];

        $filepointer = fopen($fname, "r") or die("Unable to Open File");
        readfile($fname);
        echo "<h1>File Reading Completed</h1>";
        fclose($filepointer);
    }
?>