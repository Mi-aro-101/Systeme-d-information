<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametre_model extends CI_Model {
    public function inserer($idCentre, $idProduit, $pourcentage, $statut){
        $sql = "INSERT INTO parametre (idjournal, idcentre, idproduit, pourcentae, statut) values(pg_sequence_last_value('journal_idjournal_seq'), $idCentre, $idProduit, $pourcentage, '%s')";
        $sql = sprintf($sql, $statut);
        $this->db->query($sql);
    }
}

?>