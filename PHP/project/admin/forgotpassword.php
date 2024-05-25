<?php
    session_start();
    ob_start();
    require_once("classes/Forgot.class.php");
    // set time zone
    date_default_timezone_set("Asia/Kolkata");

    // Import PHPMailer classes into the global namespace 
    use PHPMailer\PHPMailer\PHPMailer; 
    use PHPMailer\PHPMailer\SMTP; 
    use PHPMailer\PHPMailer\Exception; 
 
    // Include library files 
    require 'PHPMailer/Exception.php'; 
    require 'PHPMailer/PHPMailer.php'; 
    require 'PHPMailer/SMTP.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php
        require_once("commons/meta.php");
        require_once("commons/title.php");
    ?>
    

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a OTP to reset your password!</p>
                                    </div>
                                    <?php
                                        if(isset($_SESSION["msg"])){
                                            echo $_SESSION["msg"];
                                            unset($_SESSION["msg"]);
                                        }
                                    ?>
                                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control"
                                                id="exampleInputEmail" name="resetemail" required 
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-block" value="Reset Password" name="resetProcess">
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="index">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>

<?php
    // code for password reset process

    if(isset($_POST["resetProcess"])){
        $resetemail = $forgot->filterData($_POST["resetemail"]);
        //echo $resetemail;

        if($forgot->checkEmailAddress($resetemail)){
            //echo "True";
            $otp = rand(99999, 999999);
            $_SESSION["resetemail"] = $resetemail;

            // read SMTP Config
            $result = $forgot->readSMTPConfig();
            while($row = $result->fetch_assoc()){
                //print_r($row);
                extract($row);
            }

            // code for email send
            $content = "<hr>Your Password Reset OTP is <br> <h1>$otp</h1><hr>";
            //echo $content;

            // smtp object and configure
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPAuth = true; 
            $mail->Host = "$smtphostname"; 
            $mail->Username = "$smtpusername";
            $mail->Password = "$smtppassword";
            $mail->SMTPSecure = "$smtpsecure";
            $mail->Port = "$smtpport";

            // sender email
            $mail->setFrom("help@prajapatispirit.org", "Password Reset OTP");
            // Set email format to HTML 
            $mail->isHTML(true); 

            // receiver email
            $mail->addAddress("ghetiyaudit@gmail.com");
            $mail->Subject = "Password Reset OTP";
            $mail->Body = "$content";

            if($mail->send()){
                //echo "Mail Send Successfully";
                $currentTime = time();
                $expiryTime = strtotime("+$otptimelimit minute", $currentTime);

                $forgot->addPasswordResetOTPEntry($resetemail, $otp, date("Y-m-d H:i:s",$currentTime), date("Y-m-d H:i:s",$expiryTime));

                $forgot->logWriter($resetemail, "Password Reset OTP $otp Generated ");
                header("location:enterotp");
            }else{
                //echo "Error while sending email : ".$mail->ErrorInfo;
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Error : </strong> Unable to send OTP on $resetemail Try after Some time or Contact Admin. <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span></button></div>";
                header("location:forgotpassword");
            }

        }else{            
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Error : </strong> $resetemail does not registered with us
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></button></div>";
            header("location:forgotpassword");
        }
    }
?>