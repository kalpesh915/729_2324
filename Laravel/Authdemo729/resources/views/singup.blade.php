<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Singup Page</title>
    @include("cdn")
</head>
<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-center text-white p-5">Singup Page</h1>
        @if (session("error"))
            <div class="alert alert-danger alert-dismissible">
                <button class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Error : </strong> {{ session("error") }}
            </div>
        @elseif (session("success"))
            <div class="alert alert-success alert-dismissible">
                <button class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Success : </strong> {{ session("success") }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <button class="btn-close" data-bs-dismiss="alert"></button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/singupprocess" method="post">
            @csrf
            <div class="form-floating my-3">
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" required value="{{ old("name")}}">
                <label class="form-label" for="name">Enter Your Name</label>
            </div>
            <div class="form-floating my-3">
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required value="{{ old("email")}}">
                <label class="form-label" for="email">Enter Email Address</label>
            </div>
            <div class="form-floating my-3">
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Email Password" required>
                <label class="form-label" for="password">Enter Email Password</label>
            </div>
            <div class="form-floating my-3">
                <input type="password" name="password_confirmation" id="cpassword" class="form-control" placeholder="Enter Confirm Password" required>
                <label class="form-label" for="cpassword">Enter Confirm Password</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Create an Account" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
                <a href="/" class="btn btn-dark">Login</a>
            </div>
        </form>
    </div>
</body>
</html>