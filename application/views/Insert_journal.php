<!-- Sales Overview -->
<div class="card mt-6">

    <!-- header -->
    <div class="card-header flex flex-row justify-between">
        <h1 class="h6">Insertion de journal</h1>

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

    <center><button class="btn btn-warning" onclick="cloneRow()">+</button></center><br>
    <form action="<?php echo base_url('index.php/Journal_interaction/Verifier');?>" method="post">
        <h2>Date : <?php echo $date; ?><input type="hidden" name="date" value="<?php echo $date; ?>"></h2>
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>N° de piece</th>
                    <th>Plan comptable</th>
                    <th>Compte tiers</th>
                    <th>Libelle</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Produits</th>
                    <?php
                        foreach($centres as $centre){ ?>
                            <th><?php echo $centre['nomcentre'];?></th>
                        <?php }
                    ?>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="piece[]" required></td>
                        <td>
                            <select name="Comptable[]" id="">
                                <?php foreach($plancomptable as $compte) {?>
                                    <option value="<?php echo $compte['idplancomptable']; ?>"><?php echo $compte['code'].' - '.$compte['intitule']; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td><select name="Tiers[]" id="">
                            <option value=""></option>
                                <?php foreach($plantiers as $tiers) {?>
                                    <option value="<?php echo $tiers['idplantiers']; ?>"><?php echo $tiers['numerocompte']; ?></option>
                                <?php } ?>
                            </select></td>
                        <td><input type="text" name="Libelle[]" required></td>
                        <td><input type="text" name="Debit[]"></td>
                        <td><input type="text" name="Credit[]"></td>
                        <td>
                            <select name="Comptable[]" id="">
                                <?php foreach($produits as $produit) {?>
                                    <option value="<?php echo $produit['idproduit']; ?>"><?php echo $produit['nomproduit']; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <?php
                        foreach($centres as $centre){ ?>
                            <td><input type="text" name="pourcentage" placeholder="% (en pourcentage)"></td>
                        <?php }
                    ?>
                    </tr>
                </tbody>
        </table>


        <button type="submit" class="btn btn-danger">Soumettre</button>
    </form>

    </div>

        </div>

        <div class="">
            <div id="sealsOverview"></div>
        </div>

    </div>
    <!-- end body -->

</div>
   </body>
</html>
<script src = <?php echo base_url('js/addLine.js');?>></script>
