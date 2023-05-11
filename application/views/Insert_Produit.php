<!-- partial -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Inserer un produit</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <form action="<?php echo base_url('index.php/Produit_interaction/insererProduit'); ?>" method="post" >
                            <div class="mb-3 row">
                                <label for="inputPassword" class="form-label">Nom</label>
                                <div class="col-sm-10">
                                <input type="text" name="nomProduit" class="form-control" id="inputPassword" required>
                                </div>
                            </div>
                            <center><div class="mb-3">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div></center>
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
<script src = <?php echo base_url('js/jquery.js');?>></script>
<script src = <?php echo base_url('js/parsley.min.js');?>></script>
<script>
  $('#form').parsley();
</script>

