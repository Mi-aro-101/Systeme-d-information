
    <!-- <center><h1>Initialisation d'insertion de journal</h1></center> -->
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
                      <div>
                        <form action="<?php echo base_url('index.php/Journal_interaction/Inserer'); ?>" method="get">
                                    <div class="mb-3">
                                        <label for="inputPassword" class="form-label">Date</label>
                                        <input type="date" name="date" class="form-control" id="inputPassword">
                                    </div>
                                    <center><div class="mb-3">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div></center>
                                </form>
                            </div>

                        <div class="">
                            <div id="sealsOverview"></div>
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