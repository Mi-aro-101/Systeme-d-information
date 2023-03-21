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
    <table class="table">
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
                    <td><input type="text" name="firstName"></td>
                    <td><input type="text" name="lastName"></td>
                    <td><input type="email" name="email"></td>
                    <td><input type="text" name="firstName"></td>
                    <td><input type="text" name="lastName"></td>
                    <td><input type="email" name="email"></td>
                    <td><input type="text" name="firstName"></td>
                    <td><input type="text" name="lastName"></td>
                    <td><input type="email" name="email"></td>
                </tr>
            </tbody>
        </table>

        <button class="btn btn-warning" onclick="cloneRow()">+</button>
</body>
</html>
<link rel = "stylesheet" href = <?php echo base_url('css/bootstrap.css');?>>
<script src = <?php echo base_url('js/addLine.js');?>></script>
