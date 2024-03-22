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
        <label for="data">Enter Content to write in File </label>
        <textarea name="data" id="data" required></textarea><br>
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if(isset($_POST["process"])){
        $fname = $_POST["fname"];
        $data = $_POST["data"];

        $filepointer = fopen($fname, "w") or die("Unable to Open File");
        fwrite($filepointer, $data);
        echo "<h1>File Writing Completed</h1>";
        fclose($filepointer);
    }
?>