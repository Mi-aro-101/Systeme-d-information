<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Insertion de journal</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <center><button class="btn btn-warning" onclick="cloneRow()">+</button></center><br>
                        <form action="<?php echo base_url('index.php/Journal_interaction/Verifier');?>" method="post">
                        <h1>Date : <?php echo $date; ?><input type="hidden" name="date" value="<?php echo $date; ?>"></h1>
                        <table id="example" class="display expandable-table" style="width:100%">
                          <thead>
                          <tr>
                            <th>N° de piece</th>
                            <th>Plan comptable</th>
                            <th>Compte tiers</th>
                            <th>Libelle</th>
                            <th>Statut</th>
                            <th>Unite d'oeuvre</th>
                            <th>Cout d'unité d'oeuvre</th>
                            <th>Quantite</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Produits</th>
                            <!-- <th>Centres</th> -->
                        </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input type="text" name="piece[]" required></td>
                              <td>
                                  <select name="Comptable[]" id="">
                                      <?php foreach($plancomptable as $compte) {?>
                                          <option value="<?php echo $compte['idplancomptable']; ?>"><?php echo $compte['code'].' - '.$compte['intitule']; ?></option>
                                      <?php } ?>
                                  </select>
                              </td>
                              <td><select name="Tiers[]" id="">
                                  <option value=""></option>
                                      <?php foreach($plantiers as $tiers) {?>
                                          <option value="<?php echo $tiers['idplantiers']; ?>"><?php echo $tiers['numerocompte']; ?></option>
                                      <?php } ?>
                                  </select></td>

                              <td><input type="text" name="Libelle[]" required></td>

                              <td><input type="text" name="Statut" id=""></td>
                              <td><input type="text" name="Unite_oeuvre"></td>
                              <td><input type="text" name="Cout_unite_oeuvre"></td>
                              <td><input type="text" name="Quantite"></td>

                              <td><input type="text" name="Debit[]"></td>
                              <td><input type="text" name="Credit[]"></td>
                              <td>
                                  <select name="idproduit[]" id="">
                                      <?php foreach($produits as $produit) {?>
                                          <option value="<?php echo $produit['idproduit']; ?>"><?php echo $produit['nomproduit']; ?></option>
                                      <?php } ?>
                                  </select>
                              </td>
                              <td style="color : black" >
                                <?php
                                  $i = 0;
                                foreach($centres as $centre){ ?>
                                    <input type="hidden" name="idcentre[]" value="<?php echo $centre['idcentre']; ?>">
                                    <?php echo $centre['nomcentre']; ?>:<input type="text" name="<?php echo 'pourcentage'.$i; $i++;?>" placeholder="% (en pourcentage)">
                                <?php }
                                ?>
                                <input type="hidden" name="Centre_nbr" value="<?php echo $i; ?>">
                              </td>
                        </tr>
                        </tbody>
                      </table>
                      <center><div class="mb-3">
                                <button class="btn btn-primary" type="submit">Soumettre</button>
                            </div></center>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>
      </div>
<script src = <?php echo base_url('js/addLine.js');?>></script>
<style>
  input {border:1px solid #d1d6dc; border-radius:3px;}
  td {color : black;}
  th {text-align:center;}
</style>
