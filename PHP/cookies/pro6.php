<?php
    /*
        Delete a Cookie
        To delete a cookie, use the setcookie() function with an expiration date in the past:
    */

    require_once("menu.php");
    setcookie("username", "Yadav Yagnik", time() - 3600, "/", "", false, false);
    //setrawcookie("username", "YadavYagnik", time() + 3600, "/", "", false, false);
    echo "<hr>New Cookie Deleted";
?>