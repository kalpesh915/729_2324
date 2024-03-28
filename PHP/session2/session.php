<?php
    session_start();
    // set seconds for inactivity
    $inactivetime = 15;
    // check for username session is exist or not
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
        /* 
            check for inactivity time 
            calculate diffrence between current time and last access time
        */
        if((time() - $_SESSION["last_activity"]) > $inactivetime){
            unset($_SESSION["username"]);
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> Session Expired
            </div>";
            // redirect to login page
            header("location:index.php");
        }

        $_SESSION["last_activity"] = time();
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        <b>Error : </b> Please Login First
        </div>";
        // redirect to login page
        header("location:index.php");
    }
?>