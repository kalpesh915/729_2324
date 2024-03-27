<?php
    session_start();

    if(isset($_SESSION["username"])){
        unset($_SESSION["username"]);
        //session_destroy();

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' type='button' data-bs-dismiss='alert'></button>
        <b>Success : </b>Logout Successfully</div>";
        header("location:index.php");
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <button class='btn-close' type='button' data-bs-dismiss='alert'></button>
        <b>Error : </b>Please Login First</div>";
        header("location:index.php");
    }
?>