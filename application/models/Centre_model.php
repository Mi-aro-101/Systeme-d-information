<?php
defined('BASEPATH') OR exit('No direct script access allowed');


    class Centre_model extends CI_Model {
        public function inserer($nomCentre){
            $sql = "INSERT INTO centre (nomCentre) VALUES('%s')";
            $sql = sprintf($sql, str_replace("'", "''", $nomCentre));
            $this->db->query($sql);
        }
    }
?>
