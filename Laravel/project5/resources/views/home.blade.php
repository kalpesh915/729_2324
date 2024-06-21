<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    @include("cdn")
</head>
<body>
    <x-header></x-header>
    @include("menu")
    <div class="container-fluid">
        <h1 class="display-1">Home Page</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nemo voluptate harum minus adipisci velit optio veritatis natus itaque unde iste temporibus atque tenetur, facilis in obcaecati perferendis quae hic?</p>
        <x-content user="Udit Ghetiya" city="Rajkot" />
    </div>
</body>
</html>