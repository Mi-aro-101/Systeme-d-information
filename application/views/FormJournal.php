<div class="card mt-6">

<!-- header -->
<div class="card-header flex flex-row justify-between">
    <h1 class="h6">Insertion de journal</h1>


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

</body>
</html>

    <center><h1>Initialisation d'insertion de journal</h1></center>
