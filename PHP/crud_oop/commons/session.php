<?php
    session_start();
    ob_start();

    if(isset($_SESSION["validuser"])){
        $username = $_SESSION["validuser"];
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> Please Login First
            </div>";

            header("location:index.php");
    }
?>