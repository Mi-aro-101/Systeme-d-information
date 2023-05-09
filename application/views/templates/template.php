<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- page title specific to the page -->
        <title><?php echo $this->config->item('website_url'); ?> | {title}</title>
        <!-- meta keywords specific to the page -->
        {_meta}
        <!-- common style sheets for every page -->
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
        <!-- style sheets specific to the page -->
        {_styles}
        <!-- js files specific to the page -->
        {_scripts}
    </head>
    <body>
    <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-i tems-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href=<?php echo base_url('index.php/Accueil');?>><img src=<?php echo base_url("images/logo.svg");?> class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href=<?php echo base_url('index.php/Accueil');?>><img src=<?php echo base_url("images/logo-mini.svg");?> alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
        <!-- <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                        <span class="input-group-text" id="search">
                            <i class="icon-search"></i>
                        </span>
                    </div>
                        <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                </div>
            </li> -->
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href=<?php echo base_url('index.php/Login/deconnexion');?> data-toggle="dropdown">
                    Deconnexion
                </a>
            </li>
        </ul>    
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <p class="settings-heading">SIDEBAR SKINS</p>
        <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
        <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
        <p class="settings-heading mt-2">HEADER SKINS</p>
        <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
        </div>
    </div>
</div>
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
            <li class="nav-item">
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
            </li>
        </ul>
      </nav>
    <!-- end sidebar content -->

            {content}

    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
        </div>
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">y ETU-2020 ETU-2050 ETU-2060</a></span> 
        </div>
    </footer> 

    </body>
</html>
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