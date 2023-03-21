<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inertion Journal</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
</head>
<body>
    <center><h1>Initialisation d'insertion de journal</h1></center>
    <div class = 'row'>
        <div class = 'col-6'>
            <form action="<?php echo base_url('index.php/Journal_interaction/Inserer'); ?>" method="get">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                    <input type="date" name="date" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">N° Piece</label>
                    <div class="col-sm-10">
                    <input type="text" name="piece" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Code Journal</label>
                    <div class="col-sm-10">
                        <select name="codejournal" class="form-select">
                            <?php foreach($CodeJournal as $journal){ ?>
                                <option value="<?php echo $journal['idcodejournal']; ?>"><?php echo $journal['code']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Devise</label>
                    <div class="col-sm-10">
                        <select name="devise" class="form-select">
                            <?php foreach($Devise as $devise){?>
                                <option value="<?php echo $devise['nom']; ?>"><?php echo $devise['nom']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <center><div class="mb-3">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div></center>
            </form>
        </div>
        </div>
    </div>
</body>
</html>
