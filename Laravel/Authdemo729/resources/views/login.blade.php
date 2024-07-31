<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    @include("cdn")
</head>
<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-center text-white p-5">Login Page</h1>
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
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/loginprocess" method="post">
            @csrf
            <div class="form-floating my-3">
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required value="{{ old("email") }}">
                <label class="form-label" for="email">Enter Email Address</label>
            </div>
            <div class="form-floating my-3">
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Email Password" required>
                <label class="form-label" for="password">Enter Email Password</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Login" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
                <a href="/singup" class="btn btn-dark">Singup</a>
            </div>
        </form>
    </div>
</body>
</html>