<?php
    session_start();
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <button class='btn-close' type='button' data-bs-dismiss='alert'></button>
        <b>Error : </b>Please Login First</div>";
        header("location:index.php");
    }
?>