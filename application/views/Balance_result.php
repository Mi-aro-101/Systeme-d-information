<!-- partial -->
<div class="main-panel">
<div class="content-wrapper">
    <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <p class="card-title">Balance</p>
            <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                <table id="example" class="display expandable-table" style="width:100%">
                    <thead>
                    <tr>
                        <th>Numero de Compte</th>
                        <th>Intitule</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Solde</th>
                    </tr>
                    </thead>
                    <?php foreach($table as $tab) { ?>
                    <tr>
                            <td><?php echo $tab['code']; ?></td>
                            <td><?php echo $tab['intitule']; ?></td>
                            <td><?php echo number_format($tab['debit']); ?></td>
                            <td><?php echo number_format($tab['credit']); ?></td>
                            <td><?php echo number_format($tab['debit']-$tab['credit']); ?></td>
                    </tr>
                <?php } ?>
                </table>
                </div>
            </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
