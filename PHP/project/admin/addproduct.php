<?php
require_once("commons/session.php");
require_once("classes/Products.class.php");
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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require_once("commons/sidebar.php"); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php
                require_once("commons/topbar.php");
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add New Product</h1>
                        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="history.back();"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Back</button>
                    </div>

                    <?php
                    //require_once("commons/datacount.php");
                    ?>

                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <?php
                                    if (isset($_SESSION["msg"])) {
                                        echo $_SESSION["msg"];
                                        unset($_SESSION["msg"]);
                                    }
                                    ?>
                                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                                        <div id="accordion">

                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                                        Product Basic Details
                                                    </a>
                                                </div>
                                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="my-3">
                                                            <label for="productname">Enter Product Name</label>
                                                            <input type="text" name="productname" id="productname" required class="form-control">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="productbrandname">Enter Product Brandname</label>
                                                            <input type="text" name="productbrandname" id="productbrandname" required class="form-control">
                                                        </div>


                                                        <div class="my-3">
                                                            <label for="productcategory">Select Product Category</label>
                                                            <select name="productcategory" id="productcategory" required class="form-control">
                                                                <?php
                                                                $result = $product->getAllCategory();

                                                                while ($row = $result->fetch_assoc()) {
                                                                    echo "<option value='$row[categoryid]'>$row[categoryname]</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="productdescription">Enter Product Description</label>
                                                            <textarea name="productdescription" id="productdescription" required class="form-control" style="resize: none;"></textarea>
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="manufacturedate">Enter Product Manufacture Date</label>
                                                            <input type="date" name="manufacturedate" id="manufacturedate" required class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                                        Other Attributes Details
                                                    </a>
                                                </div>
                                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="my-3">
                                                            <label for="productcolor">Enter Product Color</label>
                                                            <input type="text" name="productcolor" id="productcolor" required class="form-control">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="productweight">Enter Product Weight</label>
                                                            <input type="text" name="productweight" id="productweight" required class="form-control">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="productsize">Enter Product Size</label>
                                                            <input type="text" name="productsize" id="productsize" required class="form-control">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="productpackaging">Enter Product Packaging</label>
                                                            <input type="text" name="productpackaging" id="productpackaging" required class="form-control">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="productmaterial">Enter Product Material</label>
                                                            <input type="text" name="productmaterial" id="productmaterial" required class="form-control">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="productshape">Enter Product Shape</label>
                                                            <input type="text" name="productshape" id="productshape" required class="form-control">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="productcountry">Enter Product country</label>
                                                            <input type="text" name="productcountry" id="productcountry" required class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                                        Price Details
                                                    </a>
                                                </div>
                                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                    <div class="my-3">
                                                            <label for="productmrp">Enter Product Price (MRP)</label>
                                                            <input type="text" name="productmrp" id="productmrp" required class="form-control">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="productdiscount">Enter Product Discount</label>
                                                            <input type="text" name="productdiscount" id="productdiscount" required class="form-control">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="returnpolicy">Enter Return Policy</label>
                                                            <textarea name="returnpolicy" id="returnpolicy" required class="form-control" style="
                                                            resize: none;"></textarea>
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="warranty">Enter Product Warranty</label>
                                                            <input type="text" name="productwarranty" id="productwarranty" required class="form-control">
                                                        </div>

                                                        <div class="my-3">
                                                            <label for="minimumorder">Enter Minimum Order</label>
                                                            <input type="text" name="minimumorder" id="minimumorder" required class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card">
                                                <div class="card-header">
                                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                                        Product Images / Video
                                                    </a>
                                                </div>
                                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                    <div class="my-3">
                                                            <label for="mediafiles">Select Images or Video of Product</label>
                                                            <input type="file" name="mediafiles[]" id="mediafiles" required class="form-control" multiple accept=".jpg, .jpeg, .png, .svg, .mp4">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="my-3">
                                                <input type="submit" value="Add New Product" class="btn btn-primary" name="addProcess">
                                                <input type="reset" value="Reset" class="btn btn-danger">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php
            require_once("commons/footer.php");
            ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level custom scripts -->
</body>
</html>

<?php
    if(isset($_POST["addProcess"])){
        $productname = $product->filterData($_POST["productname"]);
        $productbrandname = $product->filterData($_POST["productbrandname"]);
        $productcategory = $product->filterData($_POST["productcategory"]);
        $productdescription = $product->filterData($_POST["productdescription"]);
        $manufacturedate = $product->filterData($_POST["manufacturedate"]);
        $productcolor = $product->filterData($_POST["productcolor"]);
        $productweight = $product->filterData($_POST["productweight"]);
        $productsize = $product->filterData($_POST["productsize"]);
        $productpackaging = $product->filterData($_POST["productpackaging"]);
        $productmaterial = $product->filterData($_POST["productmaterial"]);
        $productshape = $product->filterData($_POST["productshape"]);
        $productcountry = $product->filterData($_POST["productcountry"]);
        $productmrp = $product->filterData($_POST["productmrp"]);
        $productdiscount = $product->filterData($_POST["productdiscount"]);
        $returnpolicy = $product->filterData($_POST["returnpolicy"]);
        $productwarranty = $product->filterData($_POST["productwarranty"]);
        $minimumorder = $product->filterData($_POST["minimumorder"]);
        $mediafiles = $_FILES["mediafiles"];


        $productid = $product->addNewProduct($productname, $productbrandname, $productcategory,$productdescription,$manufacturedate,$productcolor,$productweight,$productsize,$productpackaging,$productmaterial,$productshape,$productcountry,$productmrp,$productdiscount,$returnpolicy,$productwarranty,$minimumorder);

        //echo "New Product Added with ID $productid";

        /// media file upload
        $count = count($mediafiles["name"]);
        $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/svg", "video/mp4"];
        $success = 0; 
        $error = 0;

        for($i=0; $i<$count; $i++){
            $medianame = $mediafiles["name"][$i];
            $mediasource = $mediafiles["tmp_name"][$i];
            $mediatype = $mediafiles["type"][$i];
            $date = date("dmY_hisa");
            $random = rand(9999,99999);

            if(in_array($mediatype, $validTypes)){
                $success++;
                if($mediatype === "video/mp4"){
                    $type = 1;
                    $destination = "productmedia/video $date $random $medianame";
                }else{
                    $type = 2;
                    $destination = "productmedia/image $date $random $medianame";
                }
                // code for move file on server
                move_uploaded_file($mediasource, $destination);
                $product->addProductMedia($productid, $destination, $type);
            }
            else{
                $error++;
            }
        }

    $product->logWriter($email, "$productname Product Added ");

    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>Success : </strong> $productname Product Added in Database Total $count files selected $success files uplaoded on server. $error invalid files.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span></button></div>";
    header("location:addproduct");
    }
?>