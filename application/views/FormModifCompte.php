<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = <?php echo base_url('css/bootstrap.css');?>>
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url('index.php/Compte_interaction/validModification');?>" method="get">
        <input type="hidden" name="idplancomptable" value="<?php echo $table['idplancomptable']; ?>">
        <p>Code : <input type="text" name="code" value="<?php echo $table['code'];?>"></p>
        <p>Intitule : <input type="text" name="intitule" value="<?php echo $table['intitule'];?>"></p>
        <p><button type='submit'>Submit</button></p>
    </form>
</body>
</html>
