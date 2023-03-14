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
    <center><h1>Affichage du plan Tiers</h1></center>
    <table class="table table-success table-striped">
        <tr>
            <th>Numero</th>
            <th>Intitule du compte</th>
            <th>Suprrimer</th>
            <th>Modifier</th>
        </tr>
        <?php foreach($table as $tab){?>
        <tr>
                <td><?php echo $tab['numerocompte']; ?></td>
                <td><?php echo $tab['intitule']; ?></td>
                <td><a href=<?php echo base_url('index.php/Tiers_interaction/Supprimer/'.$tab["numerocompte"].'');?>><button>Supprimer</button class="btn btn-danger"></a></td>
                <td><a href="<?php echo base_url('index.php/Tiers_interaction/Modifier/'.$tab["numerocompte"].'');?>"><button>Modifier</button class="btn btn-warning"></a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
