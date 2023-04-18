<!-- Sales Overview -->
<div class="card mt-6">

    <!-- header -->
    <div class="card-header flex flex-row justify-between">
        <h1 class="h6">Inserer le compte Generale</h1>

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

        <form action="<?php echo base_url('index.php/Insert_comptable/Insert'); ?>" method="post" id = 'form'>
            <div class="mb-3 row">
                <label for="inputPassword" class="form-label">Numero de compte</label>
                <div class="col-sm-10">
                <input type="text" name="code" class="form-control" id="inputPassword" required  data-parsley-maxlength="5" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="form-label">Libelle</label>
                <div class="col-sm-10">
                <input type="text" name="libelle" class="form-control" id="inputPassword" required>
                </div>
            </div>
            <center><div class="mb-3">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div></center>
        </form>
        <br>
            <center><h1>Ou</h1></center>
        <br>

        <form action="<?php echo base_url('index.php/Insert_comptable/uploadcsv'); ?>" method="post" enctype='multipart/form-data'>
            <div>
                <center><label for="formFileLg" class="form-label">Inserer un fichier CSV</label></center>
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="file" required>
            </div>
            <br>
            <center><div class="mb-3">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div></center>
        </form>
        
    </div>
    <!-- end body -->

</div>
</body>
</html>
<script src = <?php echo base_url('js/jquery.js');?>></script>
<script src = <?php echo base_url('js/parsley.min.js');?>></script>
<script>
  $('#form').parsley();
</script>
