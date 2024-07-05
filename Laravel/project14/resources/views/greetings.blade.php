<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @include("cdn")
</head>
<body>
    @include("menu")

    <div class="container-fluid">
        <h1 class="bg-primary text-white p-3">Example of Request Method</h1>

        @if (session("username"))
            <div class="alert alert-success alert-dismissible">
                <button class="btn-close" data-bs-dismiss="alert"></button>
                <b>Success : </b> Session Found : Username is {{ session("username") }}
            </div>    
        @else
            <div class="alert alert-danger alert-dismissible">
                <button class="btn-close" data-bs-dismiss="alert"></button>
                <b>Error : </b> Session Not Found 
            </div>    
        @endif
    </div>
</body>
</html>