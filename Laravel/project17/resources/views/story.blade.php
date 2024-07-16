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
    <div class="container-fluid">
        <h1 class="text-white bg-primary text-center p-4">
            {{ __("story.title")}}
        </h1>

        <p class="p-4 lead">
            {{ __("story.content")}}
        </p>

        <h5 class="p-5">Moral : {{ __("story.moral")}}</h5>
    </div>
</body>
</html>