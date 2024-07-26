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
        <h1 class="bg-dark text-white p-5 text-center">Singup Page</h1>

        <div class="alert d-none" id="messages"></div>

        <form id="singupForm">
            <div class="my-3 form-floating">
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Username">
                <label class="form-label" for="name">Enter Username</label>
            </div>

            <div class="my-3 form-floating">
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address">
                <label class="form-label" for="email">Enter Email Address</label>
            </div>

            <div class="my-3 form-floating">
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Email Password">
                <label class="form-label" for="password">Enter Email Password</label>
            </div>

            <div class="my-3 form-floating">
                <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Enter Confirm Password">
                <label class="form-label" for="cpassword">Enter Confirm Password</label>
            </div>

            <div class="my-3">
                <input type="submit" value="Sing up" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
                <a href="/" class="btn btn-dark">Login</a>
            </div>
        </form>
    </div>
</body>
</html>


<script>
    // code for singup

    $(document).ready(function(){
        $(document).on("submit", "#singupForm", function(event){
            //alert("OK");
            event.preventDefault();

            let name = $("#name").val();
            let email = $("#email").val();
            let password = $("#password").val();
            let cpassword = $("#cpassword").val();

            if(password === cpassword){
                $.ajax({
                    type : "post",
                    url : "/api/signup",
                    data : {name, email, password},
                    success : function(response){
                        if(response.code === 200){
                            $("#messages").removeClass("d-none").addClass("alert-success").text("Welcome "+ response.user.email +" "+response.message);        
                        }else if(response.code === 401){
                            console.log(response);
                            let errorMessages = "";
                            for(let err in response.errors){
                                errorMessages += ""+err+" : "+response.errors[err][0];
                            }
                            $("#messages").removeClass("d-none").addClass("alert-danger").text("Error : "+errorMessages);        
                        }
                    }
                });
            }else{
                $("#messages").removeClass("d-none").addClass("alert-danger").text("Confirm Password Does not Match");
            }
        })
    });
</script>