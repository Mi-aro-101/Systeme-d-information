<div class="card mt-6">
    <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">
        <div class="p-8">
            <center><h1>Affichage du code journal</h1></center>
                <table class="table table-success table-striped">
                    <tr>
                        <th>Code</th>
                        <th>Intitule du compte</th>
                        <th>Suprrimer</th>
                        <th>Modifier</th>
                    </tr>
                    <?php foreach($table as $tab){?>
                    <tr>
                            <td><?php echo $tab['code']; ?></td>
                            <td><?php echo $tab['intitule']; ?></td>
                            <td><a href=<?php echo base_url('index.php/CodeJournal_interaction/Supprimer/'.$tab["idcodejournal"].'');?>><button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></a></td>
                            <td><a href="<?php echo base_url('index.php/CodeJournal_interaction/Modifier/'.$tab["idcodejournal"].'');?>"><button class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button></a></td>
                    </tr>
                    <?php } ?>
                </table>
        </div>
    </div>
</div>

</body>
</html>
