<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametre_model extends CI_Model {
    public function inserer($date, $idCentre, $idProduit, $pourcentage, $statut,$unite,$cout,$quantite,$rubrique){
        $sql = "INSERT INTO parametre (dateparametre, idcentre, idproduit, pourcentage, statut,uniteDoeuvre,coutDUnite,quantite,rubrique) values('%s' ,$idCentre, $idProduit, $pourcentage, '%s','%s',$cout,$quantite,'%s')";
        $sql = sprintf($sql, $date,$statut,$unite,$rubrique);
        $this->db->query($sql);
    }
}

?>
