<div class="card mt-6">

    <!-- header -->
    <div class="card-header flex flex-row justify-between">

        <div class="flex flex-row justify-center items-center">

            <a href="">
                <i class="fad fa-chevron-double-down mr-6"></i>
            </a>

            <a href="">
                <i class="fad fa-ellipsis-v"></i>
            </a>

        </div>

    </div>
    <!-- end header -->


</div>

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

                    <div >
                        <form action="<?php echo base_url('index.php/Compte_interaction/validModification');?>" method="get">
                        <input type="hidden" name="idplancomptable" value="<?php echo $table['idplancomptable']; ?>">
                        <p>Code : <input type="text" name="code" value="<?php echo $table['code'];?>"></p>
                        <p>Intitule : <input type="text" name="intitule" value="<?php echo $table['intitule'];?>"></p>
                        <p><button type='submit'>Submit</button></p>
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
