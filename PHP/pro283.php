<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
        $_SERVER
        $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations. The example below shows how to use some of the elements in $_SERVER:
    */
    
        echo "<hr>".$_SERVER["PHP_SELF"];
        echo "<hr>".$_SERVER["SERVER_NAME"];
        echo "<hr>".$_SERVER["HTTP_HOST"];
        //echo "<hr>".$_SERVER["HTTP_REFERER"];
        echo "<hr>".$_SERVER["HTTP_USER_AGENT"];
        echo "<hr>".$_SERVER["SCRIPT_NAME"];
        echo "<hr>".$_SERVER["GATEWAY_INTERFACE"];
        echo "<hr>".$_SERVER["SERVER_ADDR"];
        echo "<hr>".$_SERVER["SERVER_NAME"];
        echo "<hr>".$_SERVER["SERVER_SOFTWARE"];
        echo "<hr>".$_SERVER["SERVER_PROTOCOL"];
        echo "<hr>".$_SERVER["REQUEST_METHOD"];
        echo "<hr>".$_SERVER["REQUEST_TIME"];
        echo "<hr>".$_SERVER["QUERY_STRING"];
        echo "<hr>".$_SERVER["HTTP_ACCEPT"];
        //echo "<hr>".$_SERVER["HTTP_ACCEPT_CHARSET"];
        //echo "<hr>".$_SERVER["HTTPS"]; 
        echo "<hr>".$_SERVER["REMOTE_ADDR"];
        //echo "<hr>".$_SERVER["REMOTE_HOST"];
        echo "<hr>".$_SERVER["REMOTE_PORT"];
        echo "<hr>".$_SERVER['SCRIPT_FILENAME'];
        echo "<hr>".$_SERVER['SERVER_ADMIN'];
        echo "<hr>".$_SERVER['SERVER_PORT'];
        echo "<hr>".$_SERVER['SERVER_SIGNATURE'];
        //echo "<hr>".$_SERVER['PATH_TRANSLATED'];
        echo "<hr>".$_SERVER['SCRIPT_NAME'];
        //echo "<hr>".$_SERVER['SCRIPT_URI'];
    ?>
</body>

</html>