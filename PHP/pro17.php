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
            PHP Variables Scope
            In PHP, variables can be declared anywhere in the script.
            The scope of a variable is the part of the script where the variable can be referenced/used. PHP has three different variable scopes:   
                local, global and static

            Local Scope : 
            A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
        */ 

        function printer(){
            $x = 100;
            echo "<hr> value of \$ is $x";
        }

        printer();
    ?>
</body>
</html>