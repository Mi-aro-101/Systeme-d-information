<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Inserer un ou plusieurs compte tiers</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <form action="<?php echo base_url('index.php/Insert_tiers/Insert'); ?>" method="post" >
                            <div class="mb-3 row">
                                <label for="inputPassword" class="form-label">Numero de compte</label>
                                <div class="col-sm-10">
                                <input type="text" name="code" class="form-control" id="inputPassword" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="form-label">Libelle</label>
                                <div class="col-sm-10">
                                <input type="text" name="libelle" class="form-control" id="inputPassword" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                        <br>
                                <center><h1>Ou</h1></center>
                        <br>
                        <form action="<?php echo base_url('index.php/Insert_tiers/uploadcsv'); ?>" method="post" enctype='multipart/form-data'>
                            <div>
                                <label for="formFileLg" class="form-label">Inserer un fichier CSV</label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file" name="file" required>
                            </div>
                            <br>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
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
</div>