<?php
session_start();
ob_start();
require_once("classes/Client.class.php");

$settingsResult = $client->readSettings();
$settingsRow = $settingsResult->fetch_assoc();
extract($settingsRow);


if (isset($_POST["messageProcess"])) {
    $fname = $client->filterData($_POST["fname"]);
    $lname = $client->filterData($_POST["lname"]);
    $senderemail = $client->filterData($_POST["senderemail"]);
    $phone = $client->filterData($_POST["phone"]);
    $city = $client->filterData($_POST["city"]);
    $subject = $client->filterData($_POST["subject"]);
    $message = $client->filterData($_POST["message"]);

    $client->newMessage($fname, $lname, $senderemail, $phone, $city, $subject, $message);

    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <button class='btn-close' type='button' data-bs-dismiss='alert'></button>
            <b>Success : </b> Thanks for Contacting us, we will reach you soon.
        </div>";

    //header("location:index#contactform");
}

if (isset($_POST["subscriberProcess"])) {
    $subscriberemail = $client->filterData($_POST["subscriberemail"]);
    if ($client->addNewSubscriber($subscriberemail)) {
        $_SESSION["msg1"] = "<div class='alert alert-success alert-dismissible'>
            <button class='btn-close' type='button' data-bs-dismiss='alert'></button>
            <b>Success : </b> $subscriberemail Thanks for Subscriber
        </div>";
    } else {
        $_SESSION["msg1"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' type='button' data-bs-dismiss='alert'></button>
            <b>Success : </b> $subscriberemail is Already Registered with us
        </div>";
    }
}

if (isset($_POST["applyProcess"])) {
    $fname = $client->filterData($_POST["fname"]);
    $lname = $client->filterData($_POST["lname"]);
    $gender = $client->filterData($_POST["gender"]);
    $dateofbirth = $client->filterData($_POST["dateofbirth"]);
    $jobposition = $client->filterData($_POST["jobposition"]);
    $education = $client->filterData($_POST["education"]);
    $experience = $client->filterData($_POST["experience"]);
    $phone = $client->filterData($_POST["phone"]);
    $emailaddress = $client->filterData($_POST["emailaddress"]);
    $address = $client->filterData($_POST["address"]);
    $coverlatter = $client->filterData($_POST["coverlatter"]);

    $resumefile = $_FILES["resumefile"];

    $name = $resumefile["name"];
    $type = $resumefile["type"];
    $random = rand(9999, 99999);
    $date = date("dmY_Hisa");
    $source = $resumefile["tmp_name"];

    if ($type === "application/pdf") {
        $destination = "resumes/$random $date $emailaddress $name";

        $client->newJobApplication($fname, $lname, $gender, $dateofbirth, $jobposition, $education, $experience, $phone, $emailaddress, $address, $coverlatter, $destination);

        move_uploaded_file($source, "admin/$destination");
        $_SESSION["msg1"] = "<div class='alert alert-success alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Success : </strong> Thanks for apply we will contact you soon.
        </div>";
    } else {
        $_SESSION["msg1"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Error : </strong> Must select .PDF files Only.
        </div>";
    }

    header("location:index");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Project</title>
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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html">Presento<span>.</span></a></h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                    <?php 
                        if($careeroption == 1){
                           echo "<li><a class='nav-link scrollto' href='#career'>Career</a></li>";
                        }
                    ?>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero1" class="d-flex align-items-center w-100">
        <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <?php
                $sliderResult = $client->getSliderImages();

                $sliderCount = $sliderResult->num_rows;

                //echo $sliderCount;
                ?>
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <?php
                    for ($i = 0; $i < $sliderCount; $i++) {
                        if ($i == 0) {
                            echo "<button type='button' data-bs-target='#demo' data-bs-slide-to='$i' class='active'></button>";
                        } else {
                            echo "<button type='button' data-bs-target='#demo' data-bs-slide-to='$i'></button>";
                        }
                    }
                    ?>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <?php
                    $i = 0;

                    while ($sliderRow = $sliderResult->fetch_assoc()) {
                        if ($i == 0) {
                            echo "<div class='carousel-item active'>
                                    <img src='admin/$sliderRow[imagepath]' alt='Los Angeles' class='d-block w-100'>
                                    <div class='carousel-caption'>
                                        <h3>$sliderRow[imagetitle]</h3>
                                        <p>$sliderRow[imagedescription]</p>
                                    </div>
                                </div>";
                        } else {
                            echo "<div class='carousel-item'>
                                    <img src='admin/$sliderRow[imagepath]' alt='Los Angeles' class='d-block w-100'>
                                    <div class='carousel-caption'>
                                        <h3>$sliderRow[imagetitle]</h3>
                                        <p>$sliderRow[imagedescription]</p>
                                    </div>
                                </div>";
                        }
                        $i++;
                    }
                    ?>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            <!-- <div class="row">
                <div class="col-xl-6">
                    <h1>Bettter digital experience with Presento</h1>
                    <h2>We are team of talented designers making websites with Bootstrap</h2>
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div> -->
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Voluptatem dignissimos provident quasi</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                            <a href="#" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Corporis voluptates sit</h4>
                                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Ullamco laboris nisi</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-images"></i>
                                    <h4>Labore consequatur</h4>
                                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-shield"></i>
                                    <h4>Beatae veritatis</h4>
                                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hard Workers</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg ">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
                </div>

                <div class="row">
                    <?php
                    $servicesResult = $client->getAllServices();

                    while ($row = $servicesResult->fetch_assoc()) {
                        echo "<div class='col-md-6'>
                    <div class='icon-box' data-aos='fade-up' data-aos-delay='100'>
                      <i class='$row[serviceicon]'></i>
                      <h4><a href='#'>$row[servicetitle]</a></h4>
                      <p>$row[servicedescription]</p>
                    </div>
                  </div>";
                    }
                    ?>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <?php
                            $categoryResult = $client->getAllCategory();

                            while ($categoryRow = $categoryResult->fetch_assoc()) {
                                echo "<li data-filter='.filter-$categoryRow[categoryclassname]'>$categoryRow[categoryname]</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <?php
                    $productsResult = $client->getProducts();

                    while ($productsRow = $productsResult->fetch_assoc()) {
                        $mediapath = $client->getProductImage($productsRow["productid"]);
                        echo "<div class='col-lg-4 col-md-6 portfolio-item filter-$productsRow[categoryclassname]'>
                                <div class='portfolio-wrap'>
                                    <img src='admin/$mediapath' class='img-fluid' alt=''>
                                    <div class='portfolio-info'>
                                        <h4>$productsRow[productname]</h4>
                                        <p>$productsRow[categoryname]</p>
                                        <div class='portfolio-links'>
                                            <a href='admin/$mediapath' data-gallery='portfolioGallery' class='portfolio-lightbox' title='$productsRow[productname]'><i class='bx bx-plus'></i></a>
                                            <a href='portfolio-details?productid=$productsRow[productid]' title='More Details'><i class='bx bx-link'></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                    }
                    ?>
                </div>

            </div>
        </section><!-- End Portfolio Section -->


        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <ul class="faq-list accordion" data-aos="fade-up">
                    <?php
                    $faqResult = $client->getAllFaq();

                    while ($faqRow = $faqResult->fetch_assoc()) {
                        echo "<li>
                            <a data-bs-toggle='collapse' class='collapsed' data-bs-target='#faq$faqRow[faqid]'>$faqRow[question] <i class='bx bx-chevron-down icon-show'></i><i class='bx bx-x icon-close'></i></a>
                            <div id='faq$faqRow[faqid]' class='collapse' data-bs-parent='.faq-list'>
                                <p>$faqRow[answer]</p>
                            </div>
                        </li>";
                    }
                    ?>

                </ul>
            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
                </div>

                <div class="row">

                    <?php
                    $teamResult = $client->getTeamMembers();

                    while ($teamRow = $teamResult->fetch_assoc()) {
                        echo "<div class='col-lg-4 col-md-6 d-flex align-items-stretch'>
                            <div class='member' data-aos='fade-up' data-aos-delay='100'>
                                <div class='member-img'>
                                    <img src='admin/$teamRow[memberphoto]' class='img-fluid' alt=''>
                                    <div class='social'>";
                        echo $teamRow["memberfacebook"] != "" ? "<a href='$teamRow[memberfacebook]'><i class='bi bi-facebook'></i></a>" : "";
                        echo $teamRow["memberinstagram"] != "" ? "<a href='$teamRow[memberinstagram]'><i class='bi bi-instagram'></i></a>" : "";
                        echo $teamRow["membertwitter"] != "" ? "<a href='$teamRow[membertwitter]'><i class='bi bi-twitter'></i></a>" : "";
                        echo $teamRow["memberlinkedin"] != "" ? "<a href='$teamRow[memberlinkedin]'><i class='bi bi-linkedin'></i></a>" : "";
                        echo $teamRow["memberyoutube"] != "" ? "<a href='$teamRow[memberyoutube]'><i class='bi bi-youtube'></i></a>" : "";
                        echo $teamRow["membersnapchat"] != "" ? "<a href='$teamRow[membersnapchat]'><i class='bi bi-snapchat'></i></a>" : "";
                        echo $teamRow["membertelegram"] != "" ? "<a href='$teamRow[membertelegram]'><i class='bi bi-telegram'></i></a>" : "";
                        echo "  </div>
                                </div>
                                <div class='member-info'>
                                    <h4>$teamRow[membername]</h4>
                                    <span>$teamRow[memberdesignation]</span>
                                    <span>$teamRow[memberdescription]</span>
                                </div>
                            </div>
                        </div>";
                    }
                    ?>
                </div>
            </div>
        </section><!-- End Team Section -->

        <!-- ======= Team Section ======= -->
        <section id="gallery" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
                </div>

                <div class="row">

                    <?php
                    $galleryResult = $client->getGalleryImages();

                    while ($galleryRow = $galleryResult->fetch_assoc()) {
                        echo "<div class='col-lg-4 col-md-6 portfolio-item'>
                                <div class='portfolio-wrap'>
                                <a href='admin/$galleryRow[imagepath]' data-gallery='portfolioGallery' class='portfolio-lightbox' title='$galleryRow[imagetitle]'>
                                    <img src='admin/$galleryRow[imagepath]' class='img-fluid' alt=''>
                                    <div class='portfolio-info'>
                                        <h4>$galleryRow[imagetitle]</h4>
                                        <p>$galleryRow[imagedescription]</p>
                                        <div class='portfolio-links'>    
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>";
                    }
                    ?>
                </div>
            </div>
        </section><!-- End Team Section -->

        <!-- ======= Team Section ======= -->
        <section id="career" class="team <?= $careeroption == 0 ? 'collapse' : ''; ?>" >

            <div class="container" data-aos="fade-up">
                <?php
                if (isset($_SESSION["msg1"])) {
                    echo $_SESSION["msg1"];
                    unset($_SESSION["msg1"]);
                }
                ?>
                
                <div class="section-title">
                    <h2>Career</h2>
                    <p>Apply for Various opening at Project</p>
                </div>

                <div class="row">
                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="my-2 form-floating">
                            <input type="text" name="fname" id="fname" required class="form-control" placeholder="Enter First Name">
                            <label for="fname">Enter First Name</label>
                        </div>
                        <div class="my-2 form-floating">
                            <input type="text" name="lname" id="lname" required class="form-control" placeholder="Enter Last Name">
                            <label for="lname">Enter Last Name</label>
                        </div>
                        <div class="my-2 form-floating">
                            <select name="gender" id="gender" required class="form-control" placeholder="Select Gender">
                                <option></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label for="gender">Select Gender</label>
                        </div>
                        <div class="my-2 form-floating">
                            <input type="date" name="dateofbirth" id="dateofbirth" required class="form-control" placeholder="Select Date of Birth">
                            <label for="dateofbirth">Select Date of Birth</label>
                        </div>
                        <div class="my-2 form-floating">
                            <input type="text" name="jobposition" id="jobposition" required class="form-control" placeholder="Enter Job Position">
                            <label for="jobposition">Enter Job Position</label>
                        </div>
                        <div class="my-2 form-floating">
                            <select name="education" id="education" required class="form-control" placeholder="Select Education">
                                <option></option>
                                <option value="under10">Under 10th</option>
                                <option value="10th">10th</option>
                                <option value="12th">12th</option>
                                <option value="graduation">Graduation</option>
                                <option value="post graduation">Post Graduation</option>
                                <option value="masters">Masters</option>
                                <option value="other">other</option>
                            </select>
                            <label for="education">Select Education</label>
                        </div>
                        <div class="my-2 form-floating">
                            <select name="experience" id="experience" required class="form-control" placeholder="Select Experience">
                                <option></option>
                                <option value="fresher">Fresher</option>
                                <option value="1">1 Year</option>
                                <option value="2">2 Years</option>
                                <option value="3+">3+ Years</option>
                                <option value="5+">5+ Years</option>
                                <option value="10+">10+ Years</option>
                                <option value="other">other</option>
                            </select>
                            <label for="experience">Select Experience</label>
                        </div>
                        <div class="my-2 form-floating">
                            <input type="phone" name="phone" id="phone" required class="form-control" placeholder="Enter Phone Number" pattern="[0-9]{10,15}">
                            <label for="phone">Enter Phone Number</label>
                        </div>
                        <div class="my-2 form-floating">
                            <input type="email" name="emailaddress" id="emailaddress" required class="form-control" placeholder="Enter Email Address">
                            <label for="emailaddress">Enter Email Address</label>
                        </div>
                        <div class="my-2 form-floating">
                            <textarea name="address" id="address" class="form-control" required style="resize: none; height: 150px;"></textarea>
                            <label for="address">Enter Address</label>
                        </div>
                        <div class="my-2 form-floating">
                            <textarea name="coverlatter" id="coverlatter" class="form-control" required style="resize: none; height: 250px;"></textarea>
                            <label for="coverlatter">Write Cover Latter for Job Profile</label>
                        </div>
                        <div class="my-2 form-floating">
                            <input type="file" name="resumefile" id="resumefile" class="form-control" required accept=".pdf" placeholder="Select Resume File">
                            <label for="resumefile">Select Resume File</label>
                        </div>
                        <div class="my-2">
                            <input type="submit" value="Apply Now" class="btn btn-primary" name="applyProcess">
                            <input type="reset" value="Reset" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
        </section><!-- End Career Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
                </div>

                <?php
                $contactResult = $client->getContactUS();

                while ($contactRow = $contactResult->fetch_assoc()) {
                    extract($contactRow);
                }
                ?>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="fa fa-user"></i>
                                    <h3>Contact Person</h3>
                                    <p><?= $contactperson; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="fa fa-map"></i>
                                    <h3>Our Address</h3>
                                    <p><?= $address; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="fa fa-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p><?= $email1 != "" ? "<a href='mailto:$email1'>$email1</a>" : ""; ?></p>
                                    <p><?= $email2 != "" ? "<a href='mailto:$email2'>$email2</a>" : ""; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="fa fa-phone"></i>
                                    <h3>Call Us</h3>
                                    <p><?= $phone1 != "" ? "<a href='tel:$phone1'>$phone1</a>" : ""; ?></p>
                                    <p><?= $phone2 != "" ? "<a href='tel:$phone2'>$phone2</a>" : ""; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box mt-4">
                                    <i class="fa fa-map"></i>
                                    <h3>Location</h3>
                                    <iframe src="<?= $googlemap; ?>" style="border:0; width:100%; height:300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3">
                        <?php
                        if (isset($_SESSION["msg"])) {
                            echo $_SESSION["msg"];
                            unset($_SESSION["msg"]);
                        }
                        ?>
                    </div>
                    <div class="col-lg-12" id="contactform">

                        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="php-email-form">
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter First Name" required>
                                </div>
                                <div class="col form-group">
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter Last Name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <input type="email" name="senderemail" class="form-control" id="senderemail" placeholder="Enter Email Address" required>
                                </div>
                                <div class="col form-group">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number" required pattern="[0-9]{10,15}">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" id="city" placeholder="Enter City Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required style="resize: none;"></textarea>
                            </div>

                            <div class="text-center"><button type="submit" name="messageProcess">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <?php require_once("footer.php"); ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>