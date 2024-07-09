<?php
require_once("classes/Client.class.php");
$productid = $_GET["productid"];

$result = $client->getProduct($productid);

while ($productRow = $result->fetch_assoc()) {
  extract($productRow);
}

$settingsResult = $client->readSettings();
$settingsRow = $settingsResult->fetch_assoc();
extract($settingsRow);

$contactResult = $client->getContactUS();

while ($contactRow = $contactResult->fetch_assoc()) {
  extract($contactRow);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php
  $metaResult = $client->getMetaDetails();
  $metaRow = $metaResult->fetch_assoc();

  extract($metaRow);
  ?>
  <meta content="<?= $metadescription; ?>" name="description">
  <meta content="<?= $metakeywords; ?>" name="keywords">

  <script async src="https://www.googletagmanager.com/gtag/js?id=<?= $googletagid; ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments)
    };
    gtag('js', new Date());
    gtag('config', "<?= $googletagid; ?>");
  </script>


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index">Presento<span>.</span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index#about">About</a></li>
          <li><a class="nav-link scrollto" href="index#services">Services</a></li>
          <li><a class="nav-link scrollto " href="index#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="index#team">Team</a></li>
          <li><a class="nav-link scrollto" href="index#gallery">Gallery</a></li>
          <?php
          if ($careeroption == 1) {
            echo "<li><a class='nav-link scrollto' href='index#career'>Career</a></li>";
          }
          ?>
          <li><a class="nav-link scrollto" href="index#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
        <h2>Portfolio Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-12">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <?php
                $mediaResult = $client->getProductMedia($productid);
                //print_r($mediaResult);
                while ($row = $mediaResult->fetch_assoc()) {
                  if ($row["mediatype"] == 2) {
                    echo "<div class='swiper-slide'>
                          <img src='admin/$row[mediapath]' alt=''>
                          </div>";
                  } else if ($row["mediatype"] == 1) {

                    echo "<div class='swiper-slide'>
                          <video controls muted autoplay class='w-100'>
                            <source src='admin/$row[mediapath]' type='video/mp4'>
                          </video>
                          </div>";
                  }
                }
                ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <table class="table table-hover table-striped">
                <tbody>
                  <tr class="table-primary">
                    <th colspan="2">Basic Information</th>
                  </tr>
                  <tr>
                    <th>Product Name</th>
                    <td><?= $productname; ?></td>
                  </tr>
                  <tr>
                    <th>Brand Name</th>
                    <td><?= $productbrandname; ?></td>
                  </tr>
                  <tr>
                    <th>Product Category</th>
                    <td><?= $categoryname; ?></td>
                  </tr>
                  <tr>
                    <th>Product Description</th>
                    <td><?= $productdescription; ?></td>
                  </tr>
                  <tr>
                    <th>Manufacture Date</th>
                    <td><?= $manufacturedate; ?></td>
                  </tr>
                  <tr class="table-primary">
                    <th colspan="2">Other Information</th>
                  </tr>
                  <tr>
                    <th>Product Color</th>
                    <td><?= $productcolor; ?></td>
                  </tr>
                  <tr>
                    <th>Product Weight</th>
                    <td><?= $productweight; ?></td>
                  </tr>
                  <tr>
                    <th>Product Size</th>
                    <td><?= $productsize; ?></td>
                  </tr>
                  <tr>
                    <th>Product Packaging</th>
                    <td><?= $productpackaging; ?></td>
                  </tr>
                  <tr>
                    <th>Product Material</th>
                    <td><?= $productmaterial; ?></td>
                  </tr>
                  <tr>
                    <th>Product Shape</th>
                    <td><?= $productshape; ?></td>
                  </tr>
                  <tr>
                    <th>Product Country</th>
                    <td><?= $productcountry; ?></td>
                  </tr>
                  <tr class="table-primary">
                    <th colspan="2">Price Information</th>
                  </tr>
                  <tr>
                    <th>Product Price</th>
                    <td><?= $productmrp; ?></td>
                  </tr>
                  <tr>
                    <th>Discount</th>
                    <td><?= $productdiscount; ?></td>
                  </tr>
                  <tr>
                    <th>Return Policy</th>
                    <td><?= $returnpolicy; ?></td>
                  </tr>
                  <tr>
                    <th>Warranty</th>
                    <td><?= $productwarranty; ?></td>
                  </tr>
                  <tr>
                    <th>Minimum Order</th>
                    <td><?= $minimumorder; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  require_once("footer.php");
  ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>