<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    @include('cdn')
</head>

<body>
    <div class="container-fluid">
        {{-- <form action="/process1" method="post">
            @csrf
            <div class="my-3 form-floating">
                <input type="text" name="fname" id="fname" required class="form-control" placeholder="Enter First Name">
                <label class="form-label" for="fname">Enter First Name</label>
            </div>
            <div class="my-3 form-floating">
                <input type="text" name="lname" id="lname" required class="form-control" placeholder="Enter Last Name">
                <label class="form-label" for="lname">Enter Last Name</label>
            </div>
            <div class="my-3 form-floating">
                <input type="email" name="email" id="email" required class="form-control" placeholder="Enter Email Address">
                <label class="form-label" for="email">Enter Email Address</label>
            </div>
            <div class="my-3 form-floating">
                <input type="text" name="phone" id="phone" required class="form-control" placeholder="Enter Phone Number">
                <label class="form-label" for="phone">Enter Phone Number</label>
            </div>
            <div class="my-3 form-floating">
                <input type="number" name="age" id="age" required class="form-control" placeholder="Enter Age">
                <label class="form-label" for="age">Enter Age</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Send Data" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form> --}}

        {{-- <div class="my-3">
            @php
                print_r($errors->all());
            @endphp
        </div> --}}

        {{-- <div class="my-3 alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div> --}}

        {{-- @if ($errors->any())
            <div class="my-3 alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}


        <form action="/process1" method="post">
            @csrf
            <div class="my-3 form-floating">
                <input type="text" name="fname" id="fname" class="form-control @error('fname') is-invalid @enderror" placeholder="Enter First Name" value="{{ old('fname') }}">
                <span class="text-danger">
                    @error("fname")
                        {{ $message }}
                    @enderror
                </span>
                <label class="form-label" for="fname">Enter First Name</label>
            </div>
            <div class="my-3 form-floating">
                <input type="text" name="lname" id="lname" class="form-control @error('lname') is-invalid @enderror" placeholder="Enter Last Name" value="{{ old('lname') }}">
                <span class="text-danger">
                    @error("lname")
                        {{ $message }}
                    @enderror
                </span>
                <label class="form-label" for="lname">Enter Last Name</label>
            </div>
            <div class="my-3 form-floating">
                <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Enter Email Address" value="{{ old('email') }}">
                    <span class="text-danger">
                        @error("email")
                            {{ $message }}
                        @enderror
                    </span>
                <label class="form-label" for="email">Enter Email Address</label>
            </div>
            <div class="my-3 form-floating">
                <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror"
                    placeholder="Enter Phone Number" value="{{ old('phone') }}">
                    <span class="text-danger">
                        @error("phone")
                            {{ $message }}
                        @enderror
                    </span>
                <label class="form-label" for="phone">Enter Phone Number</label>
            </div>
            <div class="my-3 form-floating">
                <input type="text" name="age" id="age" class="form-control @error('age') is-invalid @enderror" placeholder="Enter Age" value="{{ old('age') }}">
                <span class="text-danger">
                    @error("age")
                        {{ $message }}
                    @enderror
                </span>
                <label class="form-label" for="age">Enter Age</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Send Data" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>

</html>
