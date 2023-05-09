<div>
<table class="table">
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
                        <td><?php echo number_format($tab['debit']); ?></td>
                        <td><?php echo number_format($tab['credit']); ?></td>
                        <td><?php echo number_format($tab['debit']-$tab['credit']); ?></td>
                </tr>
                <?php } ?>
            </table>
</div>