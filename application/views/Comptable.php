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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
            <form class="d-flex" method="post" id="search" action = <?php //echo base_url("index.php/Compte_interaction/Search"); ?>>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="plansearch" id="plansearch">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
  </div>
</nav>
<main>
    <div id="myDiv">
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
                    <td><a href=<?php echo base_url('index.php/Compte_interaction/Supprimer/'.$tab["idplancomptable"].'');?>><button class="btn btn-danger">Supprimer</button></a></td>
                    <td><a href=<?php echo base_url('index.php/Compte_interaction/Modifier/'.$tab["idplancomptable"].'');?>><button class="btn btn-warning">Modifier</button></a></td>
                </tr>
                <?php } ?>
        </table>
    <div>
</main>
</body>
</html>

<script type="text/javascript">
		document.getElementById("search").addEventListener("submit", function(e){
			e.preventDefault();

			var xhr = new XMLHttpRequest();

			xhr.onreadystatechange = function() {
				if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
					document.getElementById("myDiv").innerHTML = this.responseText;
				}
			};

			xhr.open("POST", "<?php echo base_url("index.php/Compte_interaction/Search"); ?>", true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            console.log(document.getElementById("plansearch").value);
			xhr.send("plansearch=" + encodeURIComponent(document.getElementById("plansearch").value));
		});
</script>
