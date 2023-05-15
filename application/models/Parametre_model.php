<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametre_model extends CI_Model {
    public function inserer($idCentre, $idProduit, $pourcentage, $statut,$unite,$cout,$quantite,$rubrique){
        $sql = "INSERT INTO parametre (idcentre, idproduit, pourcentae, statut,uniteDoeuvre,coutDUnite,quantite,rubrique) values($idCentre, $idProduit, $pourcentage, '%s','%s',$cout,$quantite,'%s')";
        $sql = sprintf($sql, $statut,$unite,$rubrique);
        $this->db->query($sql);
    }
}

?>