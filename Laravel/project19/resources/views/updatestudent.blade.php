<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Student</title>
    @include("cdn")
</head>
<body>
    @include("menu")

    <div class="conatiner-fluid">
        <h1 class="text-center p-2">Update Student</h1>
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
        <form action="/updateprocess" method="post">
            @csrf
            <div class="my-3 form-floating">
                <input type="text" name="id" id="id" required class="form-control" placeholder="Enter Student ID" value="{{ $studentData['id'] }}" readonly>
                <label class="form-label" for="id">Enter Student ID</label>
            </div>
            <div class="my-3 form-floating">
                <input type="text" name="fname" id="fname" required class="form-control" placeholder="Enter First Name" value="{{ $studentData['fname'] }}">
                <label class="form-label" for="fname">Enter First Name</label>
            </div>
            <div class="my-3 form-floating">
                <input type="text" name="lname" id="lname" required class="form-control" placeholder="Enter Last Name" value="{{ $studentData['lname'] }}">
                <label class="form-label" for="lname">Enter Last Name</label>
            </div>
            <div class="my-3 form-floating">
                <input type="text" name="city" id="city" required class="form-control" placeholder="Enter City Name" value="{{ $studentData['city'] }}">
                <label class="form-label" for="city">Enter City Name</label>
            </div>
            <div class="my-3 form-floating">
                <input type="email" name="email" id="email" required class="form-control" placeholder="Enter Email Address" value="{{ $studentData['email'] }}">
                <label class="form-label" for="email">Enter Email Address</label>
            </div>
            <div class="my-3 form-floating">
                <input type="text" name="phone" id="phone" required class="form-control" placeholder="Enter Phone Number" value="{{ $studentData['phone'] }}">
                <label class="form-label" for="phone">Enter Phone Number</label>
            </div>
            <div class="my-3 form-floating">
                <select name="gender" id="gender" required class="form-control" placeholder="Select Gender">
                    <option></option>
                    <option value="male" {{ $studentData["gender"] === "male" ? "selected" : "" }}>Male</option>
                    <option value="female" {{ $studentData["gender"] === "female" ? "selected" : "" }}>Female</option>
                </select>
                <label class="form-label" for="gender">Select Gender</label>
            </div>
            <div class="my-3 form-floating">
                <input type="number" name="age" id="age" required class="form-control" placeholder="Enter Age" min="1" max="100" value="{{ $studentData['age'] }}">
                <label class="form-label" for="age">Enter Age</label>
            </div>
            <div class="my-3 form-floating">
                <input type="submit" value="Update Student" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
</html>