
<!-- Sales Overview -->
<div class="card mt-6">

    <!-- header -->
    <div class="card-header flex flex-row justify-between">
        <h1 class="h6">Affichage du Grand livre <?php echo $table[0]['codeCompta']; ?> </h1>

        <div class="flex flex-row justify-center items-center">
            
        <div class="p-8">
            <table class="table table-success table-striped">
                <tr>
                    <th>Date</th>
                    <th>N de piece</th>
                    <th>Libelle</th>
                    <th>Debit</th>
                    <th>Credit</th>

                </tr>
                <?php foreach($table as $tab) { ?>
                <tr>
                        <td><?php echo $tab['dateentre']; ?></td>
                        <td><?php echo $tab['numpiece']; ?></td>
                        <td><?php echo $tab['libelle']; ?></td>
                        <td><?php echo $tab['debit']; ?></td>
                        <td><?php echo $tab['credit']; ?></td>
                </tr>
                <?php } ?>
            </table>
            </div>
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
