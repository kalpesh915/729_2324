<?php
    require_once("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <h1 class="p-2 bg-primary text-white">Welcome, <?php echo $username; ?></h1>
        <?php require_once("menu.php");?>
        <h1>Home Page</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, voluptas. Optio, sint. Facilis, minus obcaecati ratione aperiam, aliquam itaque amet eveniet accusamus minima iusto perferendis autem harum, ipsa porro officiis?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, voluptas. Optio, sint. Facilis, minus obcaecati ratione aperiam, aliquam itaque amet eveniet accusamus minima iusto perferendis autem harum, ipsa porro officiis?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, voluptas. Optio, sint. Facilis, minus obcaecati ratione aperiam, aliquam itaque amet eveniet accusamus minima iusto perferendis autem harum, ipsa porro officiis?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, voluptas. Optio, sint. Facilis, minus obcaecati ratione aperiam, aliquam itaque amet eveniet accusamus minima iusto perferendis autem harum, ipsa porro officiis?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, voluptas. Optio, sint. Facilis, minus obcaecati ratione aperiam, aliquam itaque amet eveniet accusamus minima iusto perferendis autem harum, ipsa porro officiis?</p>
    </div>
</body>
</html>