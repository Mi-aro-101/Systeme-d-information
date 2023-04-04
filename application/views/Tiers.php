<div class="card mt-6">

    <!-- header -->
    <div class="card-header flex flex-row justify-between">
        <h1 class="h6">Affichage du plan Tiers</h1>

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
        <table class="table table-success table-striped">
        <tr>
            <th>Numero</th>
            <th>Intitule du compte</th>
            <th>Suprrimer</th>
            <th>Modifier</th>
        </tr>
        <?php foreach($table as $tab){?>
        <tr>
                <td><?php echo $tab['numerocompte']; ?></td>
                <td><?php echo $tab['intitule']; ?></td>
                <td><a href=<?php echo base_url('index.php/Tiers_interaction/Supprimer/'.$tab["idplantiers"].'');?>><button class="btn btn-danger"><i class="bi bi-trash3-fill"></button class="btn btn-danger"></a></td>
                <td><a href="<?php echo base_url('index.php/Tiers_interaction/Modifier/'.$tab["idplantiers"].'');?>"><button class="btn btn-warning"><i class="bi bi-pencil-fill"></button class="btn btn-warning"></a></td>
        </tr>
        <?php } ?>
    </table>
        </div>
    
        <div class="">
            <div id="sealsOverview"></div>
        </div>
    
    </div>
    <!-- end body -->

</div>
</body>
</html>
