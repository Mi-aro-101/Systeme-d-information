<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Formulaire de Mise a Jour d'Entite</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                      <form  method="post" action=<?php echo base_url("index.php/DetailEntite/update");?>>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nom du Fondateur</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="fondateur" value = <?php echo $values['nomfondateur'];?> >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nom de la Societe</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nomSociete" value = <?php echo $values['nomentite'];?>>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Numero Fiscale</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="numeroFiscale" value = <?php echo $values['numerofiscale'];?>>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Siege</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="siege" value = <?php echo $values['siege'];?>>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date de Creation de l'Entite</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="creation" value = <?php echo $values['datecreation'];?>>
                </div>
                <!-- <div class="mb-3"> -->
                    <!-- <label for="exampleFormControlInput1" class="form-label">Date Debut d'Exercice</label> -->
                    <!-- <input type="date" class="form-control" id="exampleFormControlInput1" name="debutExo" value = <?php //echo $values['debutExo'];?>> -->
                <!-- </div> -->
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Objet</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="objet" value = <?php echo $values['objet'];?>>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Numero Statistique</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="numStat" value = <?php echo $values['numerostatistique'];?>>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Numero de Registre</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="numRegistre" value = <?php echo $values['numeroregistre'];?>>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Devise Tenue de Compte</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="tenueCompte" value = <?php echo $values['devisetenuedecompte'];?>>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Devise d'Equivalence</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="equivalence"value = <?php echo $values['deviseequivalence'];?>>
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
    </form>                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>
      </div>