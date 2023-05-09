<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Advanced Table</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="example" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                                <th>Code</th>
                                <th>Intitule du compte</th>
                                <!-- <th>Supprimer</th> -->
                                <th>Modifier</th>
                            </tr>
                          </thead>
                          <?php foreach($table as $tab){?>
                            <tr>
                                <td><?php echo $tab['code']; ?></td>
                                <td><?php echo $tab['intitule']; ?></td>
                                <!-- <td><a href=<?php //echo base_url('index.php/CodeJournal_interaction/Supprimer/'.$tab["idcodejournal"].'');?>><button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></a></td> -->
                                <td><a href="<?php echo base_url('index.php/CodeJournal_interaction/Modifier/'.$tab["idcodejournal"].'');?>"><button class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button></a></td>
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