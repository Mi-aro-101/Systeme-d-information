<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
</head>
<body>
    <div class = 'row'>
        <div class = 'col-3'></div>
        <div class = 'col-6'>
            <form action="<?php echo base_url('index.php/Insert_comptable/Insert'); ?>" method="post" id = 'form'>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Numero de compte</label>
                    <div class="col-sm-10">
                    <input type="text" name="code" class="form-control" id="inputPassword" required  data-parsley-maxlength="5" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Libelle</label>
                    <div class="col-sm-10">
                    <input type="text" name="libelle" class="form-control" id="inputPassword" required>
                    </div>
                </div>
                <center><div class="mb-3">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div></center>
            </form>
        <hr>
            <center><h1>Ou</h1></center>
            <form action="<?php echo base_url('index.php/Insert_comptable/uploadcsv'); ?>" method="post" enctype='multipart/form-data'>
                <div>
                    <center><label for="formFileLg" class="form-label">Inserer un fichier CSV</label></center>
                    <input class="form-control form-control-lg" id="formFileLg" type="file" name="file" required>
                </div>
                <br>
                <center><div class="mb-3">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div></center>
            </form>

        </div>
        <div class = 'col-3'></div>
        </div>
    </div>
</body>
</html>
<script src = <?php echo base_url('js/jquery.js');?>></script>
<script src = <?php echo base_url('js/parsley.min.js');?>></script>
<script>
  $('#form').parsley();
</script>
