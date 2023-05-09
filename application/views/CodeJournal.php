<div class="card mt-6">
    <div class="card-header flex flex-row justify-between">
        <div class="flex flex-row justify-center items-center">
            <center><h1>Affichage du code journal</h1></center>
            <a href="">
                <i class="fad fa-chevron-double-down mr-6"></i>
            </a>

            <a href="">
                <i class="fad fa-ellipsis-v"></i>
            </a>

        </div>
    </div>
    <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">
        <div class="p-8">
                <table class="table">
                    <tr>
                        <th>Code</th>
                        <th>Intitule du compte</th>
                        <!-- <th>Supprimer</th> -->
                        <th>Modifier</th>
                    </tr>
                    <?php foreach($table as $tab){?>
                    <tr>
                            <td><?php echo $tab['code']; ?></td>
                            <td><?php echo $tab['intitule']; ?></td>
                            <!-- <td><a href=<?php //echo base_url('index.php/CodeJournal_interaction/Supprimer/'.$tab["idcodejournal"].'');?>><button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></a></td> -->
                            <td><a href="<?php echo base_url('index.php/CodeJournal_interaction/Modifier/'.$tab["idcodejournal"].'');?>"><button class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button></a></td>
                    </tr>
                    <?php } ?>
                </table>
        </div>
    </div>
</div>

</body>
</html>
