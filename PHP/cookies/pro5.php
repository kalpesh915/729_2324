<?php
    /*
        read cookies
    */

    require_once("menu.php");
    setcookie("username", "Yadav Yagnik", time() + 3600, "/", "", false, false);
    //setrawcookie("username", "YadavYagnik", time() + 3600, "/", "", false, false);
    echo "<hr>New Cookie Updated";
?>