<div class="col-6">
<table class="table">
                <tr>
                    <th>Actif</th>
                    <th>Compte</th>
                    <th>Brut</th>
                    <th>Amortissement</th>
                    <th>Net</th>
                </tr>
                <tr>
                    <td><strong>Actif non courant</strong></td>
                </tr>
                <tr>
                        <td>IMMOBILISATIONS INCORPORELLES</td>
                        <td>20</td>
                        <td><?php echo number_format($actifBrut['vingt']); ?></td>
                        <td></td>
                        <td><?php echo number_format($actifNet['vingt']); ?></td>

                </tr>
                <tr>
                        <td>IMMOBILISATIONS CORPORELLES</td>
                        <td>21</td>
                        <td><?php echo number_format($actifBrut['vingt1']); ?></td>
                        <td></td>
                        <td><?php echo number_format($actifNet['vingt1']); ?></td>
    
                </tr>
                <tr>
                        <td>IMMOBILISATIONS BIOLOGIQUES</td>
                        <td>22</td>
                        <td><?php echo number_format($actifBrut['vingt2']); ?></td>
                        <td></td>
                        <td><?php echo number_format($actifNet['vingt2']); ?></td>
                        
                </tr>
                <tr>
                        <td>IMMOBILISATIONS EN COURS</td>
                        <td>23</td>
                        <td><?php echo number_format($actifBrut['vingt3']); ?></td>
                        <td></td>
                        <td><?php echo number_format($actifNet['vingt3']); ?></td>
                        
                </tr>
                <tr>
                        <td>IMMOBILISATIONS FINANCIERES</td>
                        <td>25</td>
                        <td><?php echo number_format($actifBrut['vingt5']); ?></td>
                        <td></td>
                        <td><?php echo number_format($actifNet['vingt5']); ?></td>
                        
                </tr>
                <tr>
                        <td>IMPOTS DIFFERES</td>
                        <td>13</td>
                        <td><?php echo number_format($actifBrut['treize']); ?></td>
                        <td></td>
                        <td></td>
                </tr>
                <tr>
                     <td><strong>Total actif non courant</strong></td>
                     <td></td>
                     <td> <strong><?php echo number_format($actifBrut['totalNonCourant']); ?></strong></td>
                     <td></td>
                     <td> <strong><?php echo number_format($actifNet['totalNonCourant']); ?></strong></td>

                </tr>
                <tr>
                    <td><strong>Actif  courant</strong></td>
                </tr>
               
                <tr>
                        <td>STOCKS ET EN-COURS</td>
                        <td>3</td>
                        <td><?php echo number_format($actifBrut['trente']); ?></td>
                        <td></td>
                        <td><?php echo number_format($actifNet['trente']); ?></td>
                        
                </tr>
                <tr>
                        <td>CREANCES ET EMPLOIS ASSIMILES</td>
                        <td>4</td>
                        <td><?php echo number_format($actifBrut['quatre']); ?></td>
                        <td></td>
                        <td><?php echo number_format($actifNet['quatre']); ?></td>
                        
                </tr>
                <tr>
                        <td>CLIENTS ET AUTRES DEBITEURS</td>
                        <td>41</td>
                        <td><?php echo number_format($actifBrut['quarante1']); ?></td>
                        <td></td>
                        <td><?php echo number_format($actifNet['quarante1']); ?></td>

                </tr>
                <tr>
                        <td>TRESORERIE ET EQUIVALENTS DE TRESORERIE</td>
                        <td>5</td>
                        <td><?php echo number_format($actifBrut['cinquante']); ?></td>
                        <td></td>
                        <td></td>
                </tr>
                <tr>
                     <td><strong>Total actif  courant</strong></td>
                     <td></td>
                     <td> <strong><?php echo number_format($actifBrut['totalCourant']); ?></strong></td>
                     <td></td>
                     <td> <strong><?php echo number_format($actifNet['totalCourant']); ?></strong></td>

                </tr>
                <tr>
                     <td><strong>Total des actifs</strong></td>
                     <td></td>
                     <td> <strong><?php echo number_format($actifBrut['totalActif']); ?></strong></td>
                     <td> <strong><?php echo number_format($actifBrut['totalActif']- $actifNet['totalActif']); ?></strong></td>
                     <td> <strong><?php echo number_format($actifNet['totalActif']); ?></strong></td>

                </tr>
            </table>

</div>