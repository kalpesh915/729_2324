<?php
    session_start();

    // check for user is loged in or not
    if(isset($_SESSION["username"])){
        // code for logout
        unset($_SESSION["username"]);
        // greeting message when successfull logout
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                <b>Success : </b> Logout Successfully
            </div>";
            // redirect to login page
        header("location:index.php");
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> Invalid login Session please login first.
            </div>";
            // redirect to login page
            header("location:index.php");
    }
?>