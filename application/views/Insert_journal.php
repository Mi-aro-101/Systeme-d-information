<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion de journal</title>
</head>
<body>
    <center><h1>Insertion de journal</h1></center>
    <center><button class="btn btn-warning" onclick="cloneRow()">+</button></center><br>
    <form action="<?php echo base_url('index.php/Journal_interaction/Equilibrer');?>" method="post">
    <table class="table ">
        <thead class="table-light">
            <tr>
                <th>Journal</th>
                <th>Date</th>
                <th>Code journal</th>
                <th>N° de piece</th>
                <th>Compte tiers</th>
                <th>Libelle</th>
                <th>Devise</th>
                <th>Debit</th>
                <th>Credit</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="Journal[]"></td>
                    <td><input type="date" name="Date[]"></td>
                    <td><input type="email" name="Code Journal[]"></td>
                    <td><input type="text" name="Piece[]"></td>
                    <td><input type="text" name="Tiers[]"></td>
                    <td><input type="email" name="Libelle[]"></td>
                    <td><input type="text" name="Devise[]"></td>
                    <td><input type="text" name="Debit[]"></td>
                    <td><input type="text" name="Credit[]"></td>
                </tr>
            </tbody>
    </table>


        <button type="submit" class="btn btn-danger">Soumettre</button>
    </form>
</body>
</html>
<link rel = "stylesheet" href = <?php echo base_url('css/bootstrap.css');?>>
<script src = <?php echo base_url('js/addLine.js');?>></script>
