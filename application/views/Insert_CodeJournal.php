<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <title>Formulaire</title>
</head>
<body>
    <div class = 'row'>
        <div class = 'col-3'></div>
        <div class = 'col-6'>
            <form action="<?php echo base_url('index.php/Insert_codeJournal/Insert'); ?>" method="post">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Code Journal</label>
                    <div class="col-sm-10">
                    <input type="text" name="code" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Intitule</label>
                    <div class="col-sm-10">
                    <input type="text" name="intitule" class="form-control" id="inputPassword">
                    </div>
                </div>
                <center><div class="mb-3">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div></center>
            </form>
        <hr>
           
        </div>
        <div class = 'col-3'></div>
        </div>
    </div>
</body>
</html>