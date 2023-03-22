<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <link rel="shortcut icon" href=<?php echo base_url('./img/fav.png');?> type="image/x-icon">  
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
  <link rel = "stylesheet" href = <?php echo base_url('css/bootstrap.css');?>>
  <link rel="stylesheet" type="text/css" href=<?php echo base_url('css/style2.css'); ?>>  
  <title>Welcome To Our Site</title>
</head>
<body class="bg-gray-100">


<!-- start navbar -->
<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">
    
    <!-- logo -->
    <a href = <?php echo base_url('index.php/Accueil');?>>
      <div class="flex-none w-56 flex flex-row items-center">
        <strong class="capitalize ml-1 flex-1">Our Site</strong>
        <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
          <i class="fad fa-list-ul"></i>
        </button>
      </div>
    </a>
    <!-- end logo -->   
    <!-- end navbar content -->

  </div>
<!-- end navbar -->


<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
  
    <!-- start sidebar -->
  <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    

    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">Insertion Compte et Code</p>

      <!-- link -->
      <a href=<?php echo base_url('index.php/Insert_comptable');?> class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        Compte Generale
      </a>
      <!-- end link -->

      <!-- link -->
      <a href=<?php echo base_url('index.php/Insert_tiers');?>  class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        Compte Tiers
      </a>
      <!-- end link -->
      
      <!-- link -->
      <a href=<?php echo base_url('index.php/Insert_codeJournal');?> class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        Code Journal
      </a>
      <!-- end link -->


      <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Details</p>

      <!-- link -->
      <a href=<?php echo base_url('index.php/DetailsEntite');?> class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        Entite
      </a>
      <!-- end link -->

      <!-- link -->
      <a href=<?php echo base_url('index.php/Compte_interaction');?> class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        Compte generale
      </a>
      <!-- end link -->

      <!-- link -->
      <a href=<?php echo base_url('index.php/Tiers_interaction');?> class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        Compte Tiers
      </a>
      <!-- end link -->

      <!-- link -->
      <a href=<?php echo base_url('index.php/CodeJournal_interaction');?>  class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        Code Journal
      </a>
      <!-- end link -->

      <!-- link -->
      <a href=<?php echo base_url('index.php/GrandLivre_interaction');?> class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        Grands Livre
      </a>
      <!-- end link -->

      <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">Comptabilite</p>

      <!-- link -->
      <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        alerts
      </a>
      <!-- end link -->
      

    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->

  
<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="<?php echo base_url('js/scripts.js');?>></script>
<!-- end script -->

</body>
</html>
