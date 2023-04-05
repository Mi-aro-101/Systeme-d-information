<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = <?php echo base_url('css/bootstrap.css');?>>
    <title>Formulaire</title>
</head>
<body>
    <center><h2 class="text-capitalize" >Formulaire d'Insertion d'Entite</h2></center>
    <br>
    <form  method="post" action=<?php echo base_url("index.php/FormEntite");?> id="form">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nom du Fondateur</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="fondateur" value = "RATSIMBAZAFY Andrinirina Mamisoa" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nom de la Societe</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nomSociete" value = "Mami Corp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Numero Fiscale</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="numeroFiscale" value = "142101" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Siege</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="siege" value = "Ambohijanaka" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date de Creation de l'Entite</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="creation" value = "" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date Debut d'Exercice</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="debutExo" value = "" required>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Objet</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="objet" value = "For Test" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Numero Statistique</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="numStat" value = "142101" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Numero de Registre</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="numRegistre" value = "142101" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Devise Tenue de Compte</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="tenueCompte" value = "Ariary" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Devise d'Equivalence</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="equivalence"value = "Euro" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mot de Passe</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" name="mdp" value = "a" required>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIF</label>
                    <input type="file" class="form-control" id="inputGroupFile01" name="upload">
                </div>
            </div>
        </div>

        <div class="row">
            <center>
                <div class="col-12">
                    <input class="btn btn-primary" type="submit" value="Enregistrer">
                </div>
            </center>
        </div>
    </form>
</body>
</html>
<script src = <?php echo base_url('js/jquery.js');?>></script>
<script src = <?php echo base_url('js/parsley.min.js');?>></script>
<script>
  $('#form').parsley();
</script>
