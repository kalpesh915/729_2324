<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Students</title>
    @include("cdn")

    <style>
        .w-5{
            width: 16px;

        }
    </style>
</head>
<body>
    @include("menu")
    <div class="container-fluid">
        <h1 class="bg-primary text-white p-4 text-center">Student Data</h1>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>EMail</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Created At</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($studentsData as $student)
                        <tr>
                            <td>{{ $student["id"]}}</td>
                            <td>{{ $student["fname"]}}</td>
                            <td>{{ $student["lname"]}}</td>
                            <td>{{ $student["city"]}}</td>
                            <td>{{ $student["email"]}}</td>
                            <td>{{ $student["phone"]}}</td>
                            <td>{{ $student["gender"]}}</td>
                            <td>{{ $student["age"]}}</td>
                            <td>{{ $student["created_at"]}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center p-3">
            {{ $studentsData->links()}}
        </div>
    </div>
</body>
</html>