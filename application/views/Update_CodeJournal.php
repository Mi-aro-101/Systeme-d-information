<div class="card mt-6">

<!-- header -->
<div class="card-header flex flex-row justify-between">
    <h1 class="h6">Formulaire de Mise a Jour du Code Journal</h1>


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

<!-- body -->
<div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">

    <div class="p-8">
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

    </form>
    </div>

    <div class="">
        <div id="sealsOverview"></div>
    </div>

</div>

</body>
</html>

    <div class = 'row'>
        <div class = 'col-3'></div>
        <div class = 'col-6'>
        <hr>
           
        </div>
        <div class = 'col-3'></div>
        </div>
    </div>
</body>
</html>