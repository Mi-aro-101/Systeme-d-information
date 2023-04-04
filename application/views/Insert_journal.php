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
        <table class="table ">
            <thead class="table-light">
                <tr>
                    <th>Date</th>
                    <th>Code journal</th>
                    <th>N° de piece</th>
                    <th>Plan comptable</th>
                    <th>Compte tiers</th>
                    <th>Libelle</th>
                    <th>Debit</th>
                    <th>Credit</th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td><?php echo $date; ?><input type="hidden" name="date" value="<?php echo $date; ?>"></td>
                        <td><?php echo $codejournal['code']; ?><input name="codejournal" type="hidden" value="<?php echo $codejournal['idcodejournal']; ?>"></td>
                        <td><?php echo $piece; ?><input type="hidden" name="piece" value="<?php echo $piece; ?>"></td>
                        <td>
                            <select name="Comptable[]" id="">
                                <?php foreach($plancomptable as $compte) {?>
                                    <option value="<?php echo $compte['idplancomptable']; ?>"><?php echo $compte['code']; ?></option>
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
                        <td><input type="text" name="Debit[]" required></td>
                        <td><input type="text" name="Credit[]"required></td>
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
