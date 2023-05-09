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

                        <table id="example" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                                <th>Date</th>
                                <th>N° de piece</th>
                                <th>Plan comptable</th>
                                <th>Compte tiers</th>
                                <th>Libelle</th>
                                <th>Debit</th>
                                <th>Credit</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td><?php echo $date; ?><input type="hidden" name="date" value="<?php echo $date; ?>"></td>
                                <td><input type="text" name="piece[]" required></td>
                                <td>
                                    <select name="Comptable[]" id="">
                                        <?php foreach($plancomptable as $compte) {?>
                                            <option value="<?php echo $compte['idplancomptable']; ?>"><?php echo $compte['code']; ?></option>
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
                                <td><input type="text" name="Debit[]"></td>
                                <td><input type="text" name="Credit[]"></td>
                            </tr>
                        </tbody>
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
<script src = <?php echo base_url('js/addLine.js');?>></script>
