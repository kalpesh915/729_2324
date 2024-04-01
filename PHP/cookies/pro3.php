<?php
    /*
        read cookies
    */

    require_once("menu.php");
    print_r($_COOKIE);
    //print_r($GLOBALS);
    /*
        Note: The value of the cookie is automatically URLencoded when sending the cookie, and automatically decoded when received (to prevent URLencoding, use setrawcookie() instead).
    */ 
?>