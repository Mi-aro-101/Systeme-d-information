
<!-- Sales Overview -->
<div class="card mt-6">

    <!-- header -->
    <div class="card-header flex flex-row justify-between">
        <h1 class="h6">Affichage du Grand livre</h1>
        <h2> Compte: <?php echo $table[0]['code']; ?> - <?php echo $table[0]['intitule']; ?> </h2>
        <div class="flex flex-row justify-center items-center">
            
            </div>
    </div>
            <!-- end header -->
            
    <!-- body -->
    <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">
        
        
    <div class="p-8">
        <table class="table">
            <tr>
                <th>Date</th>
                <th>N de piece</th>
                <th>Libelle</th>
                <th>Debit</th>
                <th>Credit</th>

            </tr>
            <?php foreach($table as $tab) { ?>
            <tr>
                    <td><?php echo $tab['dateentree']; ?></td>
                    <td><?php echo $tab['numpiece']; ?></td>
                    <td><?php echo $tab['libelle']; ?></td>
                    <td><?php echo number_format($tab['debit']); ?></td>
                    <td><?php echo number_format($tab['credit']); ?></td>
            </tr>
            <?php } ?>
        </table>
        </div>
    </div>
        </div>
    <!-- end body -->

</div>
</body>
</html>
