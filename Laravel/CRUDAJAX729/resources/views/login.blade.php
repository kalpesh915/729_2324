<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    @include('cdn')
</head>

<body>
    <div class="container-fluid">
        <h1 class="bg-dark text-white p-5 text-center">Login Page</h1>

        <div class="alert d-none" id="messages">

        </div>

        <form id="loginForm">
            <div class="my-3 form-floating">
                <input type="email" name="email" id="email" class="form-control"
                    placeholder="Enter Email Address">
                <label class="form-label" for="email">Enter Email Address</label>
            </div>

            <div class="my-3 form-floating">
                <input type="password" name="password" id="password" class="form-control"
                    placeholder="Enter Email Password">
                <label class="form-label" for="password">Enter Email Password</label>
            </div>

            <div class="my-3">
                <input type="submit" value="Login" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
                <a href="/signup" class="btn btn-dark">Create Account</a>
            </div>
        </form>
    </div>
</body>

</html>

{{-- code for login API AJAX --}}

<script>
    $(document).ready(function() {
        $(document).on("submit", "#loginForm", function(event) {
            event.preventDefault();

            let email = $("#email").val();
            let password = $("#password").val();

            $.ajax({
                url: "/api/login",
                type: "post",
                data: {
                    email,
                    password
                },
                success: function(response) {
                    console.log(response);

                    if (response.code === 200) {
                        localStorage.setItem("API_TOKEN", response.token);
                        window.location.href = '/home';
                    } else if (response.code === 401) {
                        console.log(response);
                        let errorMessages = ""+response.message;
                        for (let err in response.errors) {
                            errorMessages += "<b>" + err + "</b> : " + response.errors[err][
                                0
                            ] + "<br>";
                        }
                        $("#messages").removeClass("d-none").addClass("alert-danger").html(
                            errorMessages);
                    }
                }
            });
        });
    });
</script>
