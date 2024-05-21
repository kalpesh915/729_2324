<?php
    require_once("Connection.class.php");

    class SMTP extends Connection{
        public function getSMTPConfig(){
            $sqlquery = "select * from smtpconfig where configid = 1";
            return $this->connection->query($sqlquery);
        }

        public function updateSMTPConfig($smtphostname, $smtpusername, $smtppassword, $smtpsecure, $smtpport, $otptimelimit){
            $sqlquery = "update smtpconfig set smtphostname = '$smtphostname', smtpusername = '$smtpusername', smtppassword = '$smtppassword', smtpsecure = '$smtpsecure', smtpport = '$smtpport', otptimelimit = '$otptimelimit' where configid = 1";

            $this->connection->query($sqlquery);
        }
    }

    $smtp = new SMTP();
?>