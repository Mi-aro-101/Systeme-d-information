<?php
defined('BASEPATH') OR exit('No direct script access allowed');


    class Produit_model extends CI_Model {
        public function inserer($nomProduit){
            $sql = "INSERT INTO produit (nomProduit) VALUES('%s')";
            $sql = sprintf($sql, str_replace("'", "''", $nomProduit));
            $this->db->query($sql);
        }
    }
?>
