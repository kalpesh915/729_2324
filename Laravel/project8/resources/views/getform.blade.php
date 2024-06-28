<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Demo</title>
    @include("cdn")
</head>
<body>
    <div class="container-fluid">
        @include("menu")
        <h1 class="bg-primary text-white text-center p-4">Get Example</h1>

        <form action="/getprocess" method="get">
            <div class="my-3 form-floating">
                <input type="text" name="fname" id="fname" placeholder="Enter First Name" required class="form-control">
                <label for="fname">Enter First Name</label>
            </div>
            <div class="my-3 form-floating">
                <input type="text" name="lname" id="lname" placeholder="Enter Last Name" required class="form-control">
                <label for="lname">Enter Last Name</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Send Data" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
</html>