<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo base_url('css/bootstrap.css');?>>
    <title>Formulaire</title>
</head>
<body>
    <center><h2 class="text-capitalize" >Login</h2></center>
    <div class = 'container'>

        <div class = 'row'>
            <div class = 'col-4'></div>
            <div class = 'col-4'>
                <form method="" action="">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom Entite</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "nom">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name = "pwd">
                    </div>
                    <div id="emailHelp" class="form-text">Not yet member ?  <a href = <?php echo base_url('index.php/FormulaireAjoutEntite/');?>  class = "text-decoration-none">Click Here</a></div>
                    <br>
                    <center><button type="submit" class="btn btn-primary">Submit</button></center>
                </form>
            </div>
            <div class = 'col-4'></div>
        </div>
    </div>
</body>
</html>
