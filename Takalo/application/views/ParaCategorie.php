<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kategoria</title>
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
      <!-- <a href="index.html" class="logo me-auto"><img src="../../assets/AccueilAdmin/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="<?php echo site_url('admincnt/aculog') ;?>">Fandraisana</a></li>
          <li><a class="nav-link scrollto active" href="#">Hanamboatra kategoria</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url('admincnt/stat') ;?>">Statistika</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="color:blue;">Hanampy kategoria vaovao</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
        </div>

          </div>

          <div class="col-lg-12 mt-12 mt-lg-12 d-flex align-items-stretch">
            <form action="<?php echo site_url('admincnt/newCattrait')?>" method="post" role="form" class="monForm" style="border-left:1px solid grey; border-right: 1px solid grey;">
              <div class="row">
                    <center>
                        <p>Hanampy kategoria</p>
                    </center>
                    <div class="form-group col-md-4">
                        
                    </div>
                    <div class="form-group col-md-4">
                        <center>
                            <br>
                            <input type="text" name="newcat" class="form-control" id="name" required placeholder="Ohatra : Akanjo">
                        </center>
                    </div>
                    <div class="form-group col-md-4">
                    
                    </div>
                </div>
              <div class="text-center"><button type="submit" style="background-color:blue;">Hampiditra</button></div>
              <?php if (isset($mess)) { ?>
                <br>
                <center>
                <p class="btn btn-primary btn-user btn-block" style="font-weight: bolder; font-family:12px; background-color:white;border-color : <?php echo $loko; ?>; color: <?php echo $loko; ?>; cursor:default;">
                    <?php echo $mess;
                    unset($mess);
                    ?>
                </p>
              </center>
                <?php } ?>
            </form>
            <br>
            <form action="<?php echo site_url('admincnt/updateCat')?>" method="post" role="form" class="monForm" style="border-left:1px solid grey; border-right: 1px solid grey;">
              <div class="row">
                <center>
                    <p>Hanova kategoria</p>
                </center>
                    <div class="form-group col-md-1">
                    
                    </div>
                    <div class="form-group col-md-4">
                        <center>
                            <label for="name"></label>
                            <select class="form-select" aria-label="Default select example" name="anccat">
                                <option selected value=" ">Teo aloha</option>
                                  <?php for ($i=0; $i < count($categorie); $i++) { ?>
                                    <option value="<?php echo $categorie[$i]['idc'] ?>"> <?php echo $categorie[$i]['nom'] ?> </option>
                                  <?php } ?>
                                  
                            </select>
                        </center>
                    </div>
                    <div class="form-group col-md-1">
                    
                    </div>
                    <div class="form-group col-md-4">
                        <center>
                            <label></label>
                            <input type="text" name="nouvcat" class="form-control" id="name" required placeholder="Ny vaovao">
                        </center>
                    </div>
                </div>
              <div class="text-center"><button type="submit" style="background-color:blue;">Hampiditra</button></div>
              <?php if (isset($messe)) { ?>
                <br>
                <center>
                <p class="btn btn-primary btn-user btn-block" style="font-weight: bolder; font-family:12px; background-color:white;border-color : <?php echo $loko; ?>; color: <?php echo $loko; ?>; cursor:default;">
                    <?php echo $messe;
                    unset($messe);
                    ?>
                </p>
              </center>
                <?php } ?>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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