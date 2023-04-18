<div class="card mt-6">
    <!-- header -->
    <div class="card-header flex flex-row justify-between">
        <form class="d-flex" method="post" id="search" action = <?php //echo base_url("index.php/Compte_interaction/Search"); ?>>
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="plansearch" id="plansearch">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="flex flex-row justify-center items-center">

            <a href="">
                <i class="fad fa-chevron-double-down mr-6"></i>
            </a>

            <a href="">
                <i class="fad fa-ellipsis-v"></i>
            </a>

        </div>

    </div>
    <!-- end header -->

    <!-- body -->
    <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">
    <div class="p-8">
    <main>
        
        <div id="myDiv">
        <center><h1>Affichage du plan Comptable</h1></center>
            <table class="table">
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
                        <td><a href=<?php echo base_url('index.php/Compte_interaction/Supprimer/'.$tab["idplancomptable"].'');?>><button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></a></td>
                        <td><a href=<?php echo base_url('index.php/Compte_interaction/Modifier/'.$tab["idplancomptable"].'');?>><button class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button></a></td>
                    </tr>
                    <?php } ?>
            </table>
        <div>
    </main>
    </div>
</div>
<!-- end body -->

</div>
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
