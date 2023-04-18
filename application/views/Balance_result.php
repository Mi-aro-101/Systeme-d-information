<div class="card mt-6">
    <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">
        <div class="p-8">
            <main>
                <center><h1>Affichage de la balance</h1></center>
                    <table class="table table-success table-striped">
                        <tr>
                            <th>Numero de Compte</th>
                            <th>Intitule</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Solde</th>
                        </tr>
                        <?php foreach($table as $tab) { ?>
                        <tr>
                                <td><?php echo $tab['code']; ?></td>
                                <td><?php echo $tab['intitule']; ?></td>
                                <td><?php echo $tab['debit']; ?></td>
                                <td><?php echo $tab['credit']; ?></td>
                                <td><?php echo $tab['debit']-$tab['credit']; ?></td>
                        </tr>
                        <?php } ?>
                    </table>
            </main>
    </div>
</div>
</body>
</html>
