<div class="card mt-6">
<!-- header -->
<div class="card-header flex flex-row justify-between">
    <center><h2 class="text-capitalize" >Details Entite</h2></center>
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
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="vstack gap-3" style="color: black">
                    <div>
                        <p><label for="exampleFormControlInput1" class="form-label">Nom du Fondateur : </label> <?php echo $values['nomfondateur'];?> </p>
                    </div>
                    <div>
                        <p><label for="exampleFormControlInput1" class="form-label">Nom de la societe : </label> <?php echo $values['nomentite'];?> </p>
                    </div>
                    <div>
                       <p><label for="exampleFormControlInput1" class="form-label">Numero Fiscal : </label> <?php echo $values['numerofiscale'];?> </p> 
                    </div>
                    <div>
                       <p><label for="exampleFormControlInput1" class="form-label">Siege : </label> <?php echo $values['siege'];?> </p> 
                    </div>
                    <div>
                       <p><label for="exampleFormControlInput1" class="form-label">Date de Creation de l'Entite : </label> <?php echo $values['datedecreation'];?> </p> 
                    </div>
                    <div>
                       <p><label for="exampleFormControlInput1" class="form-label">Objet : </label> <?php echo $values['objet'];?> </p> 
                    </div>
                    <div>
                       <p><label for="exampleFormControlInput1" class="form-label">Numero Statistique : </label> <?php echo $values['numerostatistique'];?> </p> 
                    </div>
                    <div>
                       <p><label for="exampleFormControlInput1" class="form-label">Numero Registre : </label> <?php echo $values['numeroregistre'];?> </p> 
                    </div>
                    <div>
                       <p><label for="exampleFormControlInput1" class="form-label">Devise Tenue de Compte : </label> <?php echo $values['devisetenuedecompte'];?> </p> 
                    </div>
                    <div>
                       <p><label for="exampleFormControlInput1" class="form-label">Devise d'Equivalence : </label> <?php echo $values['deviseequivalence'];?> </p> 
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        <div class="row">
            <center>
                <div class="col-12">
                    <input class="btn btn-primary" type="submit" value="Modifier">
                </div>
            </center>
        </div>
    </form>
        </div>
</div>
<!-- </body>
</html> -->
