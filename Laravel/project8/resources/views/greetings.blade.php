<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include("cdn")
</head>
<body>
    @include("menu")

    <div class="container-fluid">
        <h1 class="bg-primary text-white p-4">
            Welcome {{ $response["fname"]}} {{$response["lname"]}} your Data Received with {{$response["method"]}} Method.
        </h1>
    </div>
</body>
</html>