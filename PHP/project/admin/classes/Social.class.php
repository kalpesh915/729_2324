<?php
    require_once("Connection.class.php");

    class Social extends Connection{
        public function getSocialLinks(){
            $sqlquery = "select * from socialmedia where socialid = 1";
            return $this->connection->query($sqlquery);
        }

        public function updateSocialMedia($facebook, $twitter, $instagram, $whatsapp, $telegram, $snapchat, $youtube, $linkedin){
            $sqlquery = "update socialmedia set facebook = '$facebook', twitter = '$twitter', instagram = '$instagram', whatsapp = '$whatsapp', telegram = '$telegram', snapchat = '$snapchat', youtube = '$youtube', linkedin = '$linkedin' where socialid = 1";
            $this->connection->query($sqlquery);
        }
    }

    $social = new Social();
?>