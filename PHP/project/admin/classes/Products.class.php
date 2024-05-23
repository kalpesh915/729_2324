<?php
    require_once("Connection.class.php");

    class Product extends Connection{
        public function getAllCategory(){
            $sqlquery = "select * from categorys";
            return $this->connection->query($sqlquery);
        }

        public function addNewProduct($productname, $productbrandname, $productcategory, $productdescription, $manufacturedate, $productcolor, $productweight, $productsize, $productpackaging, $productmaterial, $productshape, $productcountry, $productmrp, $productdiscount, $returnpolicy, $productwarranty, $minimumorder){
            $sqlquery = "insert into products (productname, productbrandname, productcategory, productdescription, manufacturedate, productcolor, productweight, productsize, productpackaging, productmaterial, productshape, productcountry, productmrp, productdiscount, returnpolicy, productwarranty, minimumorder) values ('$productname', '$productbrandname', '$productcategory', '$productdescription', '$manufacturedate', '$productcolor', '$productweight', '$productsize', '$productpackaging', '$productmaterial', '$productshape', '$productcountry', '$productmrp', '$productdiscount', '$returnpolicy', '$productwarranty', '$minimumorder')";
            //echo $sqlquery;

            $this->connection->query($sqlquery);
            return $this->connection->insert_id;   
        }

        public function addProductMedia($productid, $mediapath, $mediatype){
            $sqlquery = "insert into productimages (productid, mediapath, mediatype) values ('$productid', '$mediapath', '$mediatype')";
            $this->connection->query($sqlquery);
        }

        // get basic product details
        public function getAllProducts(){
            $sqlquery = "select productid, productname, productbrandname, categorys.categoryname, productmrp, products.status from products inner join categorys on products.productcategory = categorys.categoryid";
            return $this->connection->query($sqlquery);
        }

        public function updateProductStatus($productid, $status){
            $sqlquery = "update products set status = $status where productid = $productid";
            $this->connection->query($sqlquery);
        }

        // get product for edit
        public function getProduct($productid){
            $sqlquery = "select * from products where productid = $productid";
            return $this->connection->query($sqlquery);
        }

        public function getProductMedia($productid){
            $sqlquery = "select * from productimages where productid = $productid";
            return $this->connection->query($sqlquery);
        }
    }

    $product = new Product();
?>