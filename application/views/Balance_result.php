<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Plan comptable</title>
    <link rel = "stylesheet" href = <?php echo base_url('css/bootstrap.css');?>>
</head>
<body>

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
</body>
</html>
