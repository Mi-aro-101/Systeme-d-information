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
<center><h1>Affichage du Grand livre <?php echo $table[0]['codeCompta']; ?> </h1></center>
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
</main>
</body>
</html>
