<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion de journal</title>
</head>
<body>
    <table class="table">
        <thead class="table-dark">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr id="rowToClone">
                    <td><input type="text" name="firstName"></td>
                    <td><input type="text" name="lastName"></td>
                    <td><input type="email" name="email"></td>
                </tr>
            </tbody>
        </table>

        <button onclick="cloneRow()">Clone Row</button>
</body>
</html>
<link rel = "stylesheet" href = <?php echo base_url('css/bootstrap.css');?>>
<script src = <?php echo base_url('js/addLine.js');?>></script>
