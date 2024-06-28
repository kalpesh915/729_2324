<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Demo</title>
    @include("cdn")
</head>
<body>
    <div class="container-fluid">
        @include("menu")
        <h1 class="bg-primary text-white text-center p-4">Upload Example</h1>

        <form action="/uploadprocess" method="post" enctype="multipart/form-data">
            @csrf()
            <div class="my-3 form-floating">
                <input type="file" name="file1" id="file1" placeholder="Select File for Upload" required class="form-control">
                <label for="file1">Select File for Upload</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Send Data" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
</html>