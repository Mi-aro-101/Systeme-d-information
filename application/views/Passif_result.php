<div class="col-6">
<table class="table">
                <tr>
                    <th>Passif</th>
                    <th>Compte</th>
                    <th>Montant</th>
                   
                </tr>
                <tr>
                    <td><strong>Capitaux Propres</strong></td>
                </tr>
                <tr>
                        <td>Capital émis</td>
                        <td>101</td>
                        <td><?php echo number_format($passif['cent1']); ?></td>
                </tr>
                <tr>
                        <td>Réserves légales</td>
                        <td>106</td>
                        <td><?php echo number_format($passif['cent6']); ?></td>
                </tr>
                <tr>
                        <td>Autres capitaux propres </td>
                        <td>11</td>
                        <td><?php echo number_format($passif['onze']); ?></td>
                </tr>
                <tr>
                        <td>ARésultat en instance d'affectation </td>
                        <td>128</td>
                        <td><?php echo number_format($passif['douze8']); ?></td>
                </tr>
                <tr>
                        <td><strong>Total capitaux propres</strong></td>
                        <td></td>
                        <td><strong><?php echo number_format($passif['totalCapitaux']); ?></strong></td>    
                </tr>
                <tr>
                    <td><strong>Passifs non-courants</strong></td>
                </tr>
                <tr>
                        <td>Impôts différés</td>
                        <td>13</td>
                        <td><?php echo number_format($passif['treize']); ?></td>                        
                </tr>
                <tr>
                        <td>Emprunts/dettes à LMT part+1an</td>
                        <td>161</td>
                        <td><?php echo number_format($passif['cent61']); ?></td>
                </tr>
                <tr>
                        <td><strong>Total passifs non-courants</strong></td>
                        <td></td>
                        <td><strong><?php echo number_format($passif['totalNonCourant']); ?></strong></td>    
                </tr>
                <tr>
                    <td><strong>Passifs courants</strong></td>
                </tr>
                <tr>
                        <td>Dettes court terme </td>
                        <td>165</td>
                        <td><?php echo number_format($passif['cent65']); ?></td>
                </tr>
                <tr>
                        <td>Autres Dettes </td>
                        <td>4</td>
                        <td><?php echo number_format($passif['quatre']); ?></td>
                </tr>
                <tr>
                        <td>Avances reçues des clients </td>
                        <td>41</td>
                        <td><?php echo number_format($passif['quarante1']); ?></td>
                </tr>
                <tr>
                        <td>Comptes de trésorerie  </td>
                        <td>5</td>
                        <td><?php echo number_format($passif['cinquante']); ?></td>
                </tr>
                <tr>
                     <td><strong>Total passif courant</strong></td>
                     <td></td>
                     <td> <strong><?php echo number_format($passif['totalCourant']); ?></strong></td>
                </tr>
                
                <tr>
                     <td><strong>Total des passifs</strong></td>
                     <td></td>
                     <td> <strong><?php echo number_format($passif['totalPassif']); ?></strong></td></tr>
            </table>

</div>
</div>
