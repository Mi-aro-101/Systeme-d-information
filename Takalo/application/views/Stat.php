<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Statistika</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/logo/takaloIcon.png" rel="icon">
  <link href="../../assets/logo/takaloIcon.png" rel="apple-touch-icon">


  <!-- Vendor CSS Files -->
  <link href="../../assets/AccueilAdmin/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/AccueilAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/AccueilAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/AccueilAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/AccueilAdmin/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/AccueilAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/AccueilAdmin/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <!-- <link href="../../assets/AccueilAdmin/assets/css/style2.css" rel="stylesheet"> -->
  <link href="../../assets/AccueilAdmin/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.10.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top " style="background-color : blue;">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="#">IT-akalo</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="<?php echo site_url('admincnt/aculog') ;?>">Fandraisana</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url('admincnt/paracat') ;?>">Hanampy Kategoria</a></li>
          <li><a class="nav-link scrollto active" href="#">Statistika</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Facts Section ======= -->
  <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">
        <br>
        <div class="section-title">
          <h2 style="color:blue;">Statistika</h2>
          <p>Ireto avy ireo statistika ny tranokala <span>IT-akalo</span></p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-emoji-smile" style="background-color:blue;"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Isan'ireo mpikambana</p>
              <h3 style="color:blue;"><?php echo $cmembre; ?></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-award" style="background-color:blue;"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Isan'ireo takalo vita</p>
              <h3 style="color:blue;"><?php echo $cfait; ?></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
           
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/AccueilAdmin/assets/vendor/aos/aos.js"></script>
  <script src="../../assets/AccueilAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/AccueilAdmin/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/AccueilAdmin/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/AccueilAdmin/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/AccueilAdmin/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../../assets/AccueilAdmin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/AccueilAdmin/assets/js/main.js"></script>

</body>

</html>