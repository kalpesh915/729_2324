<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        Website: <input type="text" name="website"><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other<br>
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["process"])){
        //print_r($_POST);
        $name = filterData($_POST["name"]);
        $email = filterData($_POST["email"]);
        $website = filterData($_POST["website"]);
        $comment = filterData($_POST["comment"]);
        $gender = filterData($_POST["gender"]);

        echo $name, " ",$email," ",$website, " ",$comment, " ",$gender;
    }

    function filterData($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
?>