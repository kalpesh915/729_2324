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

{{-- Bootstrap Models --}}

{{-- Add new Student --}}

<div class="modal fade" id="addnewStudentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add New Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addnewStudentForm">
                    <div class="d-none" id="messages"></div>
                    <div class="my-3 form-floating">
                        <input type="text" name="fname" id="fname" required class="form-control"
                            placeholder="Enter First Name">
                        <label class="form-label" for="fname">Enter First Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="lname" id="lname" required class="form-control"
                            placeholder="Enter Last Name">
                        <label class="form-label" for="lname">Enter Last Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="city" id="city" required class="form-control"
                            placeholder="Enter City">
                        <label class="form-label" for="city">Enter City</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="email" name="email" id="email" required class="form-control"
                            placeholder="Enter Email Address">
                        <label class="form-label" for="email">Enter Email Address</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="phone" id="phone" required class="form-control"
                            placeholder="Enter Phone Number">
                        <label class="form-label" for="phone">Enter Phone Number</label>
                    </div>

                    <div class="my-3 form-floating">
                        <select name="gender" id="gender" required class="form-control" placeholder="Select Gender">
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label class="form-label" for="gender">Select Gender</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="number" name="age" id="age" required class="form-control"
                            placeholder="Enter Age">
                        <label class="form-label" for="age">Enter Age</label>
                    </div>

                    <div class="my-3">
                        <input type="submit" value="Add New Student" class="btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>


{{-- JQuery Code for API Calls --}}
<script>
    const API_TOKEN = localStorage.getItem("API_TOKEN");
    //alert(API_TOKEN);
    if (API_TOKEN === undefined) {
        window.location.href = "/";
    }

    // logout code
    $(document).on("click", "#logoutbtn", function(event){
        event.preventDefault();

        $.ajax({
                type: "post",
                url: "/api/logout",
                processData: false,
                contentType: false,
                headers: {
                    "Authorization": `Bearer ${API_TOKEN}`
                },
                success: function(response) {
                    if(response.code == 200){
                        localStorage.removeItem("API_TOKEN");
                        alert("Logout Successfully");
                        window.location.href = "/";
                    }
                }
        });

    })

    loadAllStudentsData();

    // code for add new student
    $(document).ready(function() {
        $(document).on("submit", "#addnewStudentForm", function(event) {
            event.preventDefault();

            let formData = new FormData(this);
            //console.log(formData);

            $.ajax({
                type: "post",
                url: "/api/students",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    "Authorization": `Bearer ${API_TOKEN}`
                },
                success: function(response) {
                    console.log(response);

                    if (response.code == 200) {
                        // alert(response.message);
                        $("#addnewStudentForm")[0].reset();
                        $("#addnewStudentModal").modal("hide");
                        loadAllStudentsData();
                    } else if (response.code == 401) {
                        //console.log(response);
                        let errorMessages = `Error : ${response.message}`;

                        for (let err in response.errors) {
                            errorMessages += `<br> ${err} : ${response.errors[err][0]}`;
                        }

                        $("#messages").removeClass("d-none").addClass("alert alert-danger")
                            .html(errorMessages);
                    }
                }
            });
        });
    });

    /// load All Students from Table
    function loadAllStudentsData(){
        $(document).ready(function(){
            $.ajax({
                url : "/api/students",
                type : "get",
                headers : {
                    "Authorization" : `Bearer ${API_TOKEN}`
                },
                success : function(response){
                    //console.log(response);
                    let studentsData = ``;

                    for(let student of response.studentsdata){
                        studentsData += `<tr>
                            <td>${student.id}</td>    
                            <td>${student.fname}</td>
                            <td>${student.lname}</td>
                            <td>${student.city}</td>
                            <td>${student.email}</td>
                            <td>${student.phone}</td>
                            <td>${student.gender}</td>
                            <td>${student.age}</td>
                            <td>
                                <button type='button' class='btn btn-primary viewbtn' value='${student.id}'>
                                    <i class='fa fa-eye'></i>
                                </button>
                                <button type='button' class='btn btn-dark editbtn' value='${student.id}'>
                                    <i class='fa fa-pen'></i>
                                </button>    
                                <button type='button' class='btn btn-danger deletebtn' value='${student.id}'>
                                    <i class='fa fa-trash'></i>
                                </button>
                            </td>
                        </tr>`;
                    }

                    $("#studentsData").html(studentsData);
                }
            });
        });
    }
</script>
