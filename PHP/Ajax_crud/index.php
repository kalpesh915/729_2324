<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX CRUD OOP Example</title>
    <?php 
        require_once("cdn.php"); 
        require_once("Students.class.php");
    ?>
</head>
<body>
    <!-- Modal for Add New Student -->
    <div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="saveStudent" method="post">
                    <div class="modal-body">
                        <div id="errormessageadd" class="alert alert-danger d-none"></div>
                    <div class="my-3 form-floating">
                        <input type="text" name="fname" id="fname" required placeholder="Enter First Name" class="form-control">
                        <label for="fname">Enter First Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="lname" id="lname" required placeholder="Enter Last Name" class="form-control">
                        <label for="lname">Enter Last Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="city" id="city" required placeholder="Enter City" class="form-control">
                        <label for="city">Enter City Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="email" name="email" id="email" required placeholder="Enter Email Address" class="form-control">
                        <label for="email">Enter Email Address</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="phone" id="phone" required placeholder="Enter Phone Number" class="form-control" pattern="\d{10,15}">
                        <label for="phone">Enter Phone Number</label>
                    </div>

                    <div class="my-3 form-floating">
                        <select name="gender" id="gender" class="form-select" required>
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label for="gender">Select Gender</label>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add New Student</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="viewStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <div id="errormessage" class="alert alert-danger d-none"></div>
                    
                    <div class="my-3 form-floating">
                        <input type="text" id="view_fname" readonly placeholder="Enter First Name" class="form-control">
                        <label for="view_fname">Enter First Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" id="view_lname" readonly placeholder="Enter Last Name" class="form-control">
                        <label for="view_lname">Enter Last Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" id="view_city" readonly placeholder="Enter City" class="form-control">
                        <label for="view_city">Enter City Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="email" id="view_email" readonly placeholder="Enter Email Address" class="form-control">
                        <label for="view_email">Enter Email Address</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" id="view_phone" readonly placeholder="Enter Phone Number" class="form-control" >
                        <label for="view_phone">Enter Phone Number</label>
                    </div>

                    <div class="my-3 form-floating">
                    <input type="text" id="view_gender" readonly placeholder="Selected Gender" class="form-control" >
                        <label for="view_gender">Selected Gender </label>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal for Edit Student -->
    <div class="modal fade" id="editStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="updateStudent">
                    <div class="modal-body">
                        <div id="errormessageUpdate" class="alert alert-danger d-none"></div>
                    
                    <div class="my-3 form-floating">
                        <input type="text" name="id" id="edit_id" required placeholder="Enter Student ID" class="form-control" readonly>
                        <label for="edit_id">Enter Student ID</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="fname" id="edit_fname" required placeholder="Enter First Name" class="form-control">
                        <label for="edit_fname">Enter First Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="lname" id="edit_lname" required placeholder="Enter Last Name" class="form-control">
                        <label for="edit_lname">Enter Last Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="city" id="edit_city" required placeholder="Enter City" class="form-control">
                        <label for="edit_city">Enter City Name</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="email" name="email" id="edit_email" required placeholder="Enter Email Address" class="form-control">
                        <label for="edit_email">Enter Email Address</label>
                    </div>

                    <div class="my-3 form-floating">
                        <input type="text" name="phone" id="edit_phone" required placeholder="Enter Phone Number" class="form-control" pattern="\d{10,15}">
                        <label for="edit_phone">Enter Phone Number</label>
                    </div>

                    <div class="my-3 form-floating">
                        <select name="gender" id="edit_gender" class="form-select" required>
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label for="edit_gender">Select Gender</label>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update Student</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Example of CRUD with AJAX and OOP
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addStudentModal">Add New</button></h4>
                    </div>

                    <div class="card-body">
                        <table id="myTable" class="table table-hover table-bordered table-striped">

                            <thead class="table-dark">
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>City</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                    $result = $students->getAllStudents();
                                    
                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<tr>
                                                <td>$row[fname]</td>
                                                <td>$row[lname]</td>
                                                <td>$row[city]</td>
                                                <td>$row[email]</td>
                                                <td>$row[phone]</td>
                                                <td>$row[gender]</td>
                                                <td>
                                                    <button type='button' value='$row[id]' class='viewbtn btn btn-info'>
                                                        <i class='fa fa-eye'></i>
                                                    </button>

                                                    <button type='button' value='$row[id]' class='editbtn btn btn-primary'>
                                                        <i class='fa fa-pen'></i>
                                                    </button>

                                                    <button type='button' value='$row[id]' class='deletebtn btn btn-danger'>
                                                        <i class='fa fa-trash'></i>
                                                    </button>
                                                </td>
                                            </tr>";
                                        }
                                    }else{
                                        echo "<tr>
                                            <th colspan='7'>No Data Found in Table</th>
                                        <tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    /* code for add new Student */
    $(document).on('submit', '#saveStudent', function(e){
        // cancel effect of form submit
        e.preventDefault();

        let formData = new FormData(this);
        formData.append("save_student", true);
        console.log(formData);

        $.ajax({
            type : "POST",
            url : "studentAPI.php",
            data : formData,
            processData: false,
            contentType: false,
            success : function(res){
                //alert(res);
                let response = jQuery.parseJSON(res);
                if(response.status == 423){
                    $("#errormessageadd").removeClass("d-none");
                    $("#errormessageadd").text(response.message);
                }else if(response.status == 422){
                    //alert(response.status);
                    $("#errormessageadd").removeClass("d-none");
                    $("#errormessageadd").text(response.message);
                }else if(response.status == 200){
                    $('#errormessageadd').addClass('d-none');
                    $('#addStudentModal').modal('hide');
                    $('#saveStudent')[0].reset();

                    alertify.set('notifier','position', 'top-right');
                    alertify.success(response.message);

                    $('#myTable').load(location.href + " #myTable");
                }else if(response.status == 500) {
                        alert(response.message);
                }
            }
        });
    });

    /* view student Data */
    $(document).on('click', '.viewbtn', function(){
        let id = $(this).val();
        //alert(id);

        $.ajax({
            method : "GET",
            url : "studentAPI.php?id="+id,

            success : function(res){
                response = jQuery.parseJSON(res);

                if(response.status == 404){
                    alert(response.message);
                }else if(response.status == 200){
                    $("#view_fname").val(response.data.fname);
                    $("#view_lname").val(response.data.lname);
                    $("#view_city").val(response.data.city);
                    $("#view_email").val(response.data.email);
                    $("#view_phone").val(response.data.phone);
                    $("#view_gender").val(response.data.gender);

                    $('#viewStudentModal').modal('show');
                }
            }
        });
    });

    /* code for get data edit student */ 
    $(document).on('click', '.editbtn', function(){
        let id = $(this).val();
        //alert(id);

        $.ajax({
            method : "GET",
            url : "studentAPI.php?id="+id,

            success : function(res){
                response = jQuery.parseJSON(res);

                if(response.status == 404){
                    alert(response.message);
                }else if(response.status == 200){
                    $("#edit_id").val(response.data.id);
                    $("#edit_fname").val(response.data.fname);
                    $("#edit_lname").val(response.data.lname);
                    $("#edit_city").val(response.data.city);
                    $("#edit_email").val(response.data.email);
                    $("#edit_phone").val(response.data.phone);
                    $("#edit_gender").val(response.data.gender);

                    $('#editStudentModal').modal('show');
                }
            }
        });
    });

    /* code for save updates*/ 
    $(document).on('submit', '#updateStudent', function(e){
        e.preventDefault();

        let formData = new FormData(this);
        formData.append("update_student", true);
        //console.log(formData);

        $.ajax({
            method : "POST",
            url : "studentAPI.php",
            data : formData,
            processData: false,
            contentType: false,
            success : function(res){
                const response = jQuery.parseJSON(res);

                if(response.status == 200){
                    $('#errorMessageUpdate').addClass('d-none');
                    alertify.set('notifier','position', 'top-right');
                    alertify.success(response.message);

                    $('#editStudentModal').modal('hide');
                    $('#updateStudent')[0].reset();

                    $('#myTable').load(location.href + " #myTable");
                }else if(response.status == 422){
                    $('#errorMessageUpdate').removeClass('d-none');
                    $('#errorMessageUpdate').text(response.message);
                }else if(response.status == 500){
                    alert(response.message);
                }
            }
        });
    });

    /* code for delete student */ 
    $(document).on('click', '.deletebtn', function(){
        const id = $(this).val();

        if(confirm("Are you sure to delete data with "+id+" ID.?")){
            $.ajax({
                method : "POST",
                url : "studentAPI.php",
                data : {
                    "delete_student" : true,
                    "id" : id
                },
                success : function(res){
                    const response = jQuery.parseJSON(res);

                    if(response.status == 200){
                        alertify.set('notifier','position', 'top-right');
                        alertify.success(response.message);
                        $('#myTable').load(location.href + " #myTable");
                    }else if(response.status == 500){
                        alert(response.message);
                    }
                }
            });
        }
    });
</script>