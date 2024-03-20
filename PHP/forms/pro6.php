<?php
    $name = $email = $website = $comment = $gender = "";
    $errname = $erremail = $errwebsite = $errcomment = $errgender = "";
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["process"])){
        //print_r($_POST);

        if(empty($_POST["name"])){
            $errname = "Name is Required";
        }else{
            $name = filterData($_POST["name"]);
        }

        if(empty($_POST["email"])){
            $erremail = "Email is Required";
        }else{
            $email = filterData($_POST["email"]);
        }
        
        if(empty($_POST["comment"])){
            $errcomment = "Comment is Required";
        }else{
            $comment = filterData($_POST["comment"]);
        }

        if(empty($_POST["website"])){
            $errwebsite = "Website is Required";
        }else{
            $website = filterData($_POST["website"]);
        }

        if(empty($_POST["gender"])){
            $errgender = "Gender is Required";
        }else{
            $gender = filterData($_POST["gender"]);
        }
    }

    function filterData($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .error{
            color: red;
        }
    </style>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name"><span class="error">* <?php echo $errname; ?></span><br>
        E-mail: <input type="text" name="email"><span class="error">* <?php echo $erremail; ?></span><br>
        Website: <input type="text" name="website"><span class="error">* <?php echo $errwebsite; ?></span><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea><span class="error">* <?php echo $errcomment; ?></span><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other <span class="error">* <?php echo $errgender; ?></span><br>
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    echo $name, " ",$email," ",$website, " ",$comment, " ",$gender;
?>