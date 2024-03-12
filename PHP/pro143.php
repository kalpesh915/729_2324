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
            
        */ 

        $ip1 = 1;
        
        do{
            $ip1++;
            if($ip1 == 5){
                continue;
            }
            echo " $ip1";
            
        }while($ip1 <= 10); 
    ?>
</body>
</html>