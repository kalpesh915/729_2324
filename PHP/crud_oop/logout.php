<?php
    session_start();
    ob_start();
    require_once("classes/Users.class.php");
    if(isset($_SESSION["validuser"])){
        $users->logWriter($_SESSION["validuser"], "Logout Successfully");
        unset($_SESSION["validuser"]);
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Success : </b> Logout Successfully
            </div>";
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> Invalid Attempt of Logout
            </div>";
    }
    
    header("location:index.php");
?>