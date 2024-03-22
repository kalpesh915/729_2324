<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label for="fname">Enter File Name to store data in upper.txt: </label>
        <input type="text" name="fname" id="fname" required><br>
        <input type="submit" value="Convert File in uppercase" name="process">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if(isset($_POST["process"])){
        // get file name to read
        $fname = $_POST["fname"];

        // create two pointers for read and write file
        $readpointer = fopen($fname, "r") or die("Unable to Open File");
        $writepointer = fopen("upper.txt", "w") or die("Unable to Open File");

        // get data from first file convert in upper and store in new file
        while(!feof($readpointer)){
            fwrite($writepointer, strtoupper(fgets($readpointer)));
        }
        
        echo "<h1>File Converting Completed</h1>";
        fclose($readpointer);
        fclose($writepointer);
    }
?>