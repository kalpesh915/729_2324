
const API_TOKEN = localStorage.getItem("API_TOKEN");
//alert(API_TOKEN);
if (API_TOKEN === null) {
    window.location.href = "/";
}

// logout code
$(document).on("click", "#logoutbtn", function (event) {
    event.preventDefault();

    $.ajax({
        type: "post",
        url: "/api/logout",
        processData: false,
        contentType: false,
        headers: {
            "Authorization": `Bearer ${API_TOKEN}`
        },
        success: function (response) {
            if (response.code == 200) {
                localStorage.removeItem("API_TOKEN");
                alert("Logout Successfully");
                window.location.href = "/";
            }
        }
    });

})

loadAllStudentsData();

// code for add new student
$(document).ready(function () {
    $(document).on("submit", "#addnewStudentForm", function (event) {
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
            success: function (response) {
                //console.log(response);

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
function loadAllStudentsData() {
    $(document).ready(function () {
        $.ajax({
            url: "/api/students",
            type: "get",
            headers: {
                "Authorization": `Bearer ${API_TOKEN}`
            },
            success: function (response) {
                //console.log(response);
                let studentsData = ``;

                for (let student of response.studentsdata) {
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

// delete student code
$(document).on("click", ".deletebtn", function (event) {
    event.preventDefault();
    //alert("ok");
    let id = $(this).val();
    //alert(id);

    if (confirm("Are you sure to delete student with Id " + id + "?")) {
        $.ajax({
            url: "/api/students/" + id,
            type: "delete",
            headers: {
                "Authorization": `Bearer ${API_TOKEN}`
            },
            success: function (response) {
                if (response.code == 200) {
                    //alert(response.message);
                    loadAllStudentsData();
                } else if (response.code == 401) {
                    alert(response.message);
                }
            }
        });
    }
});


// view student
$(document).on("click", ".viewbtn", function (event) {
    event.preventDefault();
    let id = $(this).val();
    //alert(id);

    $.ajax({
        url: "/api/students/" + id,
        type: "get",
        headers: {
            "Authorization": `Bearer ${API_TOKEN}`
        },
        success: function (response) {
            if (response.code == 200) {
                //console.log(response.studentdata);
                $("#view_id").val(response.studentdata.id);
                $("#view_fname").val(response.studentdata.fname);
                $("#view_lname").val(response.studentdata.lname);
                $("#view_city").val(response.studentdata.city);
                $("#view_email").val(response.studentdata.email);
                $("#view_phone").val(response.studentdata.phone);
                $("#view_gender").val(response.studentdata.gender);
                $("#view_age").val(response.studentdata.age);
                $("#viewStudentModal").modal("show");
            } else if (response.code == 401) {
                alert(response.message);
            }
        }
    });
})

// load student data for edit 
$(document).on("click", ".editbtn", function (event) {
    event.preventDefault();
    let id = $(this).val();
    //alert(id);

    $.ajax({
        url: "/api/students/" + id,
        type: "get",
        headers: {
            "Authorization": `Bearer ${API_TOKEN}`
        },
        success: function (response) {
            if (response.code == 200) {
                $("#edit_id").val(response.studentdata.id);
                $("#edit_fname").val(response.studentdata.fname);
                $("#edit_lname").val(response.studentdata.lname);
                $("#edit_city").val(response.studentdata.city);
                $("#edit_email").val(response.studentdata.email);
                $("#edit_phone").val(response.studentdata.phone);
                $("#edit_gender").val(response.studentdata.gender);
                $("#edit_age").val(response.studentdata.age);
                $("#editStudentModal").modal("show");
            } else if (response.code == 401) {
                alert(response.message);
            }
        }
    });
});

// code for update form submit
$(document).on("submit", "#editStudentForm", function (event) {
    //alert("ok");
    event.preventDefault();

    let formData = new FormData(this);
    formData.append("_method", "put");
    //console.log(formData);
    //alert(formData.get("id"));

    $.ajax({
        url: "/api/students/" + formData.get("id"),
        type: "post",
        headers: {
            "Authorization": `Bearer ${API_TOKEN}`
        }, data: formData,
        processData: false,
        contentType: false,

        success: function (response) {
            if (response.code == 200) {
                $("#editStudentForm")[0].reset();
                $("#editStudentModal").modal("hide");
                loadAllStudentsData();
            } else if (response.code == 401) {
                //console.log(response);
                let errorMessages = `Error : ${response.message}`;

                for (let err in response.errors) {
                    errorMessages += `<br> ${err} : ${response.errors[err][0]}`;
                }
                $("#edit_messages").removeClass("d-none").addClass("alert alert-danger")
                    .html(errorMessages);
            } else if (response.code == 404) {
                alert(response.message);
            }
        }
    });
});
