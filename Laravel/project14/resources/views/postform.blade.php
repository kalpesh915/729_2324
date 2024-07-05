<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Form</title>
    @include("cdn")
</head>
<body>
    @include("menu")

    <div class="container-fluid">
        <h1 class="bg-primary text-white p-3 text-center">Post Example</h1>
        <form action="/postprocess" method="post">
            @csrf
            <div class="my-3 form-floating">
                <input type="text" name="fname" id="fname" required class="form-control" placeholder="Enter First Name">
                <label class="form-label" for="fname">Enter First Name</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Send Data" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>