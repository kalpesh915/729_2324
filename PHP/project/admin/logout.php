<?php
    session_start();
    ob_start();

    if(isset($_SESSION["email"])){
        require_once("classes/Users.class.php");
        $users->logWriter($_SESSION["email"], "Logout Successfully");

        unset($_SESSION["email"]);
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success : </strong>  Logout Successfully <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button></div>";
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Error : </strong> Invalid Attempt of Logout
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span> </button></div>";
    }

    header("location:index.php");
?>