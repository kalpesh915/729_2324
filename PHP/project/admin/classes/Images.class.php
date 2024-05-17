<?php
    require_once("Connection.class.php");

    class Images extends Connection{
        public function addNewImage($imagetitle, $imagedescription, $imagepath, $imagetype){
            $sqlquery = "insert into images (imagetitle, imagedescription, imagepath, imagetype) values ('$imagetitle', '$imagedescription', '$imagepath', '$imagetype')";
            $this->connection->query($sqlquery);
        }

        public function getSingleImage($imageid){
            $sqlquery = "select * from images where imageid = $imageid";
            return $this->connection->query($sqlquery);
        }

        public function getSliderImages(){
            $sqlquery = "select * from images where imagetype = 1";
            return $this->connection->query($sqlquery);
        }

        public function getGalleryImages(){
            $sqlquery = "select * from images where imagetype = 2";
            return $this->connection->query($sqlquery);
        }

        public function changeImageStatus($imageid, $status){
            $sqlquery = "update images set status = $status where imageid = $imageid";
            $this->connection->query($sqlquery);
        }

        public function updateImage($imageid, $imagetitle, $imagedescription, $imagepath=null, $imagetype){
            if($imagepath == null){
                // only details update
                $sqlquery = "update images set imagetitle = '$imagetitle', imagedescription = '$imagedescription', imagetype = $imagetype where imageid = $imageid";
                $this->connection->query($sqlquery);
            }else{
                // details and image both update
                $sqlquery = "select imagepath from images where imageid = $imageid";

                $result = $this->connection->query($sqlquery);

                while($row = $result->fetch_assoc()){
                    // delete image
                    unlink($row["imagepath"]);
                }

                $sqlquery = "update images set imagetitle = '$imagetitle', imagedescription = '$imagedescription', imagepath = '$imagepath', imagetype = $imagetype where imageid = $imageid";
                $this->connection->query($sqlquery);
            }
        }

        public function deleteImage($imageid){
             // delete image
             $sqlquery = "select imagepath from images where imageid = $imageid";

             $result = $this->connection->query($sqlquery);

             while($row = $result->fetch_assoc()){
                 // delete image
                 unlink($row["imagepath"]);
             }

             $sqlquery = "delete  from images  where imageid = $imageid";
             $this->connection->query($sqlquery);
        }
    }

    $images = new Images();
?>