<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre code Journal</title>
    <link rel = "stylesheet" href = <?php echo base_url('css/bootstrap.css');?>>
</head>
<body>
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
                <td><a href=<?php echo base_url('index.php/CodeJournal_interaction/Supprimer/'.$tab["idcodejournal"].'');?>><button class="btn btn-danger">Supprimer</button></a></td>
                <td><a href="<?php echo base_url('index.php/CodeJournal_interaction/Modifier/'.$tab["idcodejournal"].'');?>"><button class="btn btn-warning">Modifier</button></a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
