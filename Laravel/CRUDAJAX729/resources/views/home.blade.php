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
        <h1 class="bg-primary text-white text-center p-5">Example of CRUD with AJAX and API</h1>

        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-dark" id="addbtn" data-bs-toggle="modal"
                data-bs-target="#addnewStudentModal">Add New</button>
            <button type="button" class="btn btn-danger" id="logoutbtn">Logout</button>
        </div>

        <hr>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody id="studentsData">

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

@include("bsmodals")

<script src="js/AjaxApi.js"></script>