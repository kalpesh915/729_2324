<?php
    session_start();
    ob_start();
    date_default_timezone_set("Asia/Kolkata");
    if(isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Error : </strong> Please Login First
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span> </button></div>";
        header("location:index.php");
    }
?>