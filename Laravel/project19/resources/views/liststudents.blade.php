<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Students</title>
    <style>
        .w-5 {
            height: 20px;
            width: 20px;
        }
    </style>
    @include('cdn')
</head>

<body>
    @include('menu')
    <div class="container-fluid">
        <h1 class="bg-primary text-white text-center p-4">Student List</h1>
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible">
                <button class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Error : </strong> {{ session('error') }}
            </div>
        @elseif (session('success'))
            <div class="alert alert-success alert-dismissible">
                <button class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Success : </strong> {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-hover table-struped">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
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

                <tbody>
                    @foreach ($studentsList as $student)
                        <tr>
                            <td>{{ $student['id'] }}</td>
                            <td>{{ $student['fname'] }}</td>
                            <td>{{ $student['lname'] }}</td>
                            <td>{{ $student['city'] }}</td>
                            <td>{{ $student['email'] }}</td>
                            <td>{{ $student['phone'] }}</td>
                            <td>{{ $student['gender'] }}</td>
                            <td>{{ $student['age'] }}</td>
                            <td>
                                <a href="/updatedata/{{$student['id']}}" class="btn btn-primary">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <button class="btn btn-danger mx-2" type="button"
                                    onclick="confirmDelete({{ $student['id'] }})">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center">
            {{ $studentsList->links() }}
        </div>
    </div>
</body>

</html>

<script>
    function confirmDelete(id) {
        // alert(id);
        if (confirm("Are you sure to delete this data ??")) {
            location.assign("/deletestudent/" + id);
        }
    }
</script>
