<?php
    require_once("Connection.class.php");

    class Team extends Connection{
        public function addNewTeamMember($membername, $memberdesignation, $memberdescription, $memberfacebook, $memberinstagram, $membertwitter, $memberlinkedin, $memberyoutube, $membersnapchat, $membertelegram, $memberphoto){
            $sqlquery = "insert into team (membername, memberdesignation, memberdescription, memberfacebook, memberinstagram, membertwitter, memberlinkedin, memberyoutube, membersnapchat, membertelegram, memberphoto) values ('$membername', '$memberdesignation', '$memberdescription', '$memberfacebook', '$memberinstagram', '$membertwitter', '$memberlinkedin', '$memberyoutube', '$membersnapchat', '$membertelegram', '$memberphoto')";
            $this->connection->query($sqlquery);
        }

        public function getAllMembers(){
            $sqlquery = "select teamid, membername, memberdesignation, memberphoto, status from team";
            return $this->connection->query($sqlquery);
        }

        public function getSingleMember($teamid){
            $sqlquery = "select * from team where teamid = $teamid";
            return $this->connection->query($sqlquery);
        }

        public function updateMemberStatus($teamid, $status){
            $sqlquery = "update team set status = $status where teamid = $teamid";
            $this->connection->query($sqlquery);
        }

        public function updateTeamMember($teamid, $membername, $memberdesignation, $memberdescription, $memberfacebook, $memberinstagram, $membertwitter, $memberlinkedin, $memberyoutube, $membersnapchat, $membertelegram, $memberphoto=null){
            // code for update data without image 

            $sqlquery = "update team set membername = '$membername', memberdesignation = '$memberdesignation',  memberdescription = '$memberdescription', memberfacebook = '$memberfacebook', memberinstagram = '$memberinstagram', membertwitter = '$membertwitter', memberlinkedin = '$memberlinkedin', memberyoutube = '$memberyoutube', membersnapchat = '$membersnapchat', membertelegram = '$membertelegram' where teamid = $teamid";

            $this->connection->query($sqlquery);

            // check for image update
            if($memberphoto !== null){
                // delete existing photo
                $sqlquery = "select memberphoto from team where teamid = $teamid";
                $result = $this->connection->query($sqlquery);

                while($row = $result->fetch_assoc()){
                    // deleting file
                    unlink($row["memberphoto"]);
                }

                $sqlquery = "update team set memberphoto = '$memberphoto' where teamid = $teamid";
                $this->connection->query($sqlquery);
            }
        }

        public function deleteTeamMember($teamid){
            // delete member image
            $sqlquery = "select memberphoto from team where teamid = $teamid";
                $result = $this->connection->query($sqlquery);

                while($row = $result->fetch_assoc()){
                    // deleting file
                    unlink($row["memberphoto"]);
                }

                $sqlquery = "delete from team  where teamid = $teamid";
                $this->connection->query($sqlquery);
        }
    }

    $team = new Team();
?>