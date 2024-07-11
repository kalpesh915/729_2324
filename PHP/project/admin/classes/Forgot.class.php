<?php
    require_once("Connection.class.php");

    class Forgot extends Connection{
        public function checkEmailAddress($resetemail){
            $sqlquery = "select * from adminusers where email = '$resetemail'";
            $result = $this->connection->query($sqlquery);
            if($result->num_rows > 0){
                return true;
            }else{
                return false;
            }
        }

        public function readSMTPConfig(){
            $sqlquery = "select * from smtpconfig where configid = 1";
            return $this->connection->query($sqlquery);
        }

        public function addPasswordResetOTPEntry($resetemail, $otp, $created_at, $expire_at){
            // delete old otp
            $sqlquery = "delete from resetpaswordotp where email = '$resetemail'";
            $this->connection->query($sqlquery);

            $sqlquery = "insert into resetpaswordotp (email, otptext, created_at, expire_at) values ('$resetemail', '$otp', '$created_at', '$expire_at')";
            
            //echo $sqlquery;
            $this->connection->query($sqlquery);
        }

        public function validateOTP($resetemail, $otp){
            // check for valid OTP and Email address
            $sqlquery = "select * from resetpaswordotp where email = '$resetemail' and otptext = '$otp' and status = 0";
            $result = $this->connection->query($sqlquery);

            // check if data found or not
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    // check for expiry time is greater than current time
                    if(strtotime($row["expire_at"]) > time()){
                        $sqlquery = "update resetpaswordotp set status = 1 where requestid = '$row[requestid]'";
                        $this->connection->query($sqlquery);
                        return true;
                    }
                }
            }else{
                return false;
            }
        }

        public function changePassword($email, $newpassword){
            $sqlquery = "update adminusers set password = '$newpassword' where email = '$email'";
            $this->connection->query($sqlquery);
        }
        
    }

    $forgot = new Forgot();
?>