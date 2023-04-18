<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Livre</title>
    <link rel = "stylesheet" href = <?php echo base_url('css/bootstrap.css');?>>
</head>
<body>

<main>
<center><h1>Taper le code comptable que vous rechercher</h1></center>
<div class="row">
    <div class="col-3 offset"></div>
    <div class="col-6">
    <form class="d-flex" method="post" action="<?php echo base_url('index.php/GrandLivre_interaction/afficher'); ?>">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="plansearch">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>
    <div class="col-3 offset"></div>
</div>
</main>
</body>
</html>
