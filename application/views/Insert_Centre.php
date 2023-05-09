<!-- Sales Overview -->
<link rel = "stylesheet" href = <?php echo base_url('css/bootstrap.css');?>>
<div class="card mt-6">

    <!-- header -->
    <div class="card-header flex flex-row justify-between">
        <h1 class="h6">Inserer un centre</h1>

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

        <form action="<?php echo base_url('index.php/Centre_interaction/insererCentre'); ?>" method="post" >
            <div class="mb-3 row">
                <label for="inputPassword" class="form-label">Nom</label>
                <div class="col-sm-10">
                <input type="text" name="nomCentre" class="form-control" id="inputPassword" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputPassword" class="form-label">Nature</label>
                <div class="col-sm-10">
                <select name="nature" class="form-select" aria-label="Default select example">
                    <option value="S">Structure</option>
                    <option value="O">Operationel</option>
                </select>
                </div>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Soumettre</button>
            </div>
        </form>
    </div>

        </div>

        <div class="">
            <div id="sealsOverview"></div>
        </div>

    </div>
    <!-- end body -->

</div>
