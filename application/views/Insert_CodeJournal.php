<!-- Sales Overview -->
<div class="card mt-6">

    <!-- header -->
    <div class="card-header flex flex-row justify-between">
        <h1 class="h6">Inserer les code Journal</h1>

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
    </div>
    <!-- end body -->

</div>
</body>
</html>