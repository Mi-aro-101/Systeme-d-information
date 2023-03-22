<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo base_url('css/bootstrap.css');?>>
    <title>Formulaire</title>
</head>
<body>
    <center><h2 class="text-capitalize" >Login</h2></center>
    <div class = 'container'>

        <div class = 'row'>
            <div class = 'col-4'></div>
            <div class = 'col-4'>
                <form method="post" action=<?php echo base_url('index.php/Login/check');?> id = "form">
                    <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Nom Entite</label>
                        <input type="text" class="form-control" name = "nom" value = "Mami Corp" id = "nom">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name = "pwd" value = "a" id = "pwd">
                    </div>
                    <div class="form-text">Not yet member ?  <a href = <?php echo base_url('index.php/FormulaireAjoutEntite');?>  class = "text-decoration-none">Click Here</a></div>
                    <br>
                    <center><button type="submit" class="btn btn-primary">Submit</button></center>
                </form>
            </div>
            <div class = 'col-4' id = "myDiv"></div>
        </div>
    </div>
</body>
</html>
<!-- <script type="text/javascript">
		document.getElementById("form").addEventListener("submit", function(e){
			e.preventDefault();

			var xhr = new XMLHttpRequest();

			xhr.onreadystatechange = function() {
				if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
					document.getElementById("myDiv").innerHTML = this.responseText;
				}
			};

			xhr.open("POST", "<?php //echo base_url("index.php/Login/check"); ?>", true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            console.log(document.getElementById("plansearch").value);
			xhr.send("nom=" + encodeURIComponent(document.getElementById("nom").value) + "&pwd=" + encodeURIComponent(document.getElementById("pwd").value));
		});
</script> -->

