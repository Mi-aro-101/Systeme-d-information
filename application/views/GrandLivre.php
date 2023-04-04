<!-- Sales Overview -->
<div class="card mt-6">

    <!-- header -->
    <div class="card-header flex flex-row justify-between">
        <h1 class="h6">    
            <form class="d-flex" method="post" action="<?php echo base_url('index.php/GrandLivre_interaction/afficher'); ?>">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="plansearch">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
</h1>

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
        
    </div>
    <!-- end body -->

</div>
</body>
</html>
