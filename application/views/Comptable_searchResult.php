<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Plan comptable</title>
    <link rel = "stylesheet" href = <?php echo base_url('bootstrap-icons/font/bootstrap-icons.css');?>>
    <link rel = "stylesheet" href = <?php echo base_url('css/bootstrap.css');?>>
</head>
<body>
<main>
<center><h1>Affichage du plan Comptable</h1></center>
    <table class="table table-success table-striped">
        <tr>
            <th>Numero</th>
            <th>Intitule du compte</th>
            <th>Suprrimer</th>
            <th>Modifier</th>
        </tr>
        <?php foreach($table as $tab){?>
        <tr>
                <td><?php echo $tab['code']; ?></td>
                <td><?php echo $tab['intitule']; ?></td>
                <td><a href=<?php echo base_url('index.php/Compte_interaction/Supprimer/'.$tab["code"].'');?>><button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></a></td>
                <td><a href="<?php echo base_url('index.php/Compte_interaction/Modifier/'.$tab["code"].'');?>"><button class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button></a></td>
        </tr>
        <?php } ?>
    </table>
</main>
</body>
</html>
