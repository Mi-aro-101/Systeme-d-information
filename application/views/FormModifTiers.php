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

<!-- body -->
<div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">

    <div class="p-8">
        <form action="<?php echo base_url('index.php/Tiers_interaction/validModification');?>" method="get">
            <input type="hidden" name="idplantiers" value="<?php echo $table['idplantiers']; ?>">
            <p>Code : <input type="text" name="numerocompte" value="<?php echo $table['numerocompte'];?>"></p>
            <p>Intitule : <input type="text" name="intitule" value="<?php echo $table['intitule'];?>"></p>
            <p><button type='submit'>Submit</button></p>
        </form>
    </div>

    <div class="">
        <div id="sealsOverview"></div>
    </div>

</div>

</body>
</html>
