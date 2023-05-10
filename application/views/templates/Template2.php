<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href=<?php echo base_url("vendors/feather/feather.css");?>>
  <link rel="stylesheet" href=<?php echo base_url("vendors/ti-icons/css/themify-icons.css");?>>
  <link rel="stylesheet" href=<?php echo base_url("vendors/css/vendor.bundle.base.css");?>>
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href=<?php echo base_url("vendors/datatables.net-bs4/dataTables.bootstrap4.css");?>>
  <link rel="stylesheet" href=<?php echo base_url("vendors/ti-icons/css/themify-icons.css");?>>
  <link rel="stylesheet" type="text/css" href=<?php echo base_url("js/select.dataTables.min.css");?>>
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href=<?php echo base_url("css/vertical-layout-light/style.css");?>>
  <!-- endinject -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href=<?php echo base_url('./img/fav.png');?> type="image/x-icon">
  <link rel = "stylesheet" href = <?php echo base_url('bootstrap-icons/font/bootstrap-icons.css');?>>
  <link rel = "stylesheet" href = <?php echo base_url('css/bootstrap.css');?>>
  <link rel="stylesheet" type="text/css" href=<?php echo base_url('css/style2.css'); ?>>
  <link rel="shortcut icon" href=<?php echo base_url("images/favicon.png");?> />
</head>
  <body>
    
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href=<?php echo base_url('index.php/Accueil');?>>
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Compte General</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=<?php echo base_url('index.php/Insert_comptable');?>>Insertion</a></li>
                <li class="nav-item"> <a class="nav-link" href=<?php echo base_url('index.php/Compte_interaction');?>>Affichage</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Compte Tiers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href=<?php echo base_url('index.php/Insert_tiers');?>>Insertion</a></li>
                <li class="nav-item"> <a class="nav-link" href=<?php echo base_url('index.php/Tiers_interaction');?>>Affichage</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Journal</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=<?php echo base_url('index.php/Insert_codeJournal');?>>Insertion Code</a></li>
                <li class="nav-item"> <a class="nav-link" href=<?php echo base_url('index.php/Journal_interaction');?>>Insertion Journal</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Entite</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=<?php echo base_url('index.php/DetailsEntite');?>>Details</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Grands Livre</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=<?php echo base_url('index.php/GrandLivre_interaction');?>>Afficher</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Balance</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=<?php echo base_url('index.php/Balance_interaction');?>>Afficher</a></li>
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
        </ul>
      </nav>
    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->
  <!-- plugins:js -->
  <script src=<?php echo base_url("vendors/js/vendor.bundle.base.js"); ?>></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src=<?php echo base_url("vendors/chart.js/Chart.min.js");?>></script>
  <script src=<?php echo base_url("vendors/datatables.net/jquery.dataTables.js");?>></script>
  <script src=<?php echo base_url("vendors/datatables.net-bs4/dataTables.bootstrap4.js");?>></script>
  <script src=<?php echo base_url("js/dataTables.select.min.js");?>></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=<?php echo base_url("js/off-canvas.js");?>></script>
  <script src=<?php echo base_url("js/hoverable-collapse.js");?>></script>
  <script src=<?php echo base_url("js/template.js");?>></script>
  <script src=<?php echo base_url("js/settings.js");?>></script>
  <script src=<?php echo base_url("js/todolist.js");?>></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=<?php echo base_url("js/dashboard.js");?>></script>
  <script src=<?php echo base_url("js/Chart.roundedBarCharts.js");?>></script>
  <!-- End custom js for this page-->

  <script src=<?php echo base_url("js/dashboard.js");?>></script>
  <script src=<?php echo base_url("js/Chart.roundedBarCharts.js");?>></script>

