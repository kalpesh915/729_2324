<?php
    require_once("Connection.class.php");

    class Settings extends Connection{
        public function getSettings(){
            $sqlquery = "select * from settings where settingid = 1";
            return $this->connection->query($sqlquery);
        }

        public function updateSettings($googletranslate, $careeroption){
            $sqlquery = "update settings set googletranslate = $googletranslate, careeroption = $careeroption where settingid = 1";
            $this->connection->query($sqlquery);
        }
    }

    $settings = new Settings();
?>