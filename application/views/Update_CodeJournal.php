<!-- partial -->
<div class="main-panel">
<div class="content-wrapper">
    <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <p class="card-title">Update Code Journal</p>
            <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                <form action="<?php echo base_url('index.php/CodeJournal_interaction/Update'); ?>" method="post">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Code Journal</label>
                    <div class="col-sm-10">
                    <input type="text" name="code" class="form-control" id="inputPassword" value="<?php echo $table["code"]; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Intitule</label>
                    <div class="col-sm-10">
                    <input type="text" name="intitule" class="form-control" id="inputPassword" value="<?php echo $table["intitule"]; ?>">
                    </div>
                </div>
                <input type="hidden" name="idcodejournal" value="<?php echo $table["idcodejournal"]; ?>">
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