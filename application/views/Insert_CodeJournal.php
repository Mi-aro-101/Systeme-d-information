<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Inserer les code Journaux</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                      <form action="<?php echo base_url('index.php/Insert_codeJournal/Insert'); ?>" method="post">
                        <div class="mb-3 row">
                            <label for="inputPassword" class="form-label">Code Journal</label>
                            <div class="col-sm-10">
                            <input type="text" name="code" class="form-control" id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="form-label">Intitule</label>
                            <div class="col-sm-10">
                            <input type="text" name="intitule" class="form-control" id="inputPassword">
                            </div>
                        </div>
                        <center><div class="mb-3">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div></center>
                    </form>   
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