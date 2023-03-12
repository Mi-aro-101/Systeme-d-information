<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = <?php echo site_url('css/bootstrap.css');?>>
    <title>Formulaire</title>
</head>
<body>
    <center><h2 class="text-capitalize" >Formulaire d'Insertion d'Entite</h2></center>
    <br>
    <form  method="post" action=<?php base_url("index.php/FormEntite");?>>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nom du Fondateur</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="fondateur" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nom de la Societe</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nomSociete">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Numero Fiscale</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="numeroFiscale">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Siege</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="siege">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date de Creation de l'Entite</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="creation" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date Debut d'Exercice</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="debutExo">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Objet</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="objet">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Numero Statistique</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="numStat">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Numero de Registre</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="numRegistre">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Devise Tenue de Compte</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="tenueCompte">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Devise d'Equivalence</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="equivalence">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mot de Passe</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="mdp ">
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
