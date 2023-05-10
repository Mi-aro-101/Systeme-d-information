<!-- end body -->
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Affichage du plan Comptable</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="example" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                            <th>Numero</th>
                            <th>Intitule du compte</th>
                            <th>Suprrimer</th>
                            <th>Modifier</th>
                            </tr>
                          </thead>
                          <?php foreach($table as $tab){?>
                            <tr>
                                <td><?php echo $tab['code']; ?></td>
                                <td><?php echo $tab['intitule']; ?></td>
                                <td><a href=<?php echo base_url('index.php/Compte_interaction/Supprimer/'.$tab["idplancomptable"].'');?>><button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button></a></td>
                                <td><a href=<?php echo base_url('index.php/Compte_interaction/Modifier/'.$tab["idplancomptable"].'');?>><button class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button></a></td>
                            </tr>
                    <?php } ?>
                      </table>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

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
