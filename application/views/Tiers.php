<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Affichage du plan Tiers</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="example" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                                <th>Numero</th>
                                <th>Intitule du compte</th>
                                <th>Suprrimer</th>
                                <th>Modifier</th>
                            </tr>
                          </thead>
                          <?php foreach($table as $tab){?>
                            <tr>
                                <td><?php echo $tab['numerocompte']; ?></td>
                                <td><?php echo $tab['intitule']; ?></td>
                                <td><a href=<?php echo base_url('index.php/Tiers_interaction/Supprimer/'.$tab["idplantiers"].'');?>><button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button class="btn btn-danger"></a></td>
                                <td><a href="<?php echo base_url('index.php/Tiers_interaction/Modifier/'.$tab["idplantiers"].'');?>"><button class="btn btn-warning"><i class="bi bi-pencil-fill"></button class="btn btn-warning"></a></td>
                            </tr>
                         <?php } ?>
                        </table>    
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
