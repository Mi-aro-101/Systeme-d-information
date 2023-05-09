<?php
defined('BASEPATH') OR exit('No direct script access allowed');


    class Centre_model extends CI_Model {
        public function inserer($nomCentre, $nature){
            $sql = "INSERT INTO centre (nomCentre, nature) VALUES('%s', '%s')";
            $sql = sprintf($sql, str_replace("'", "''", $nomCentre), str_replace("'", "''", $nature));
            $this->db->query($sql);
        }

        public function findAll(){
            $query = ("select * from centre");
            $query = $this->db->query($query);
            $centres = array();

            foreach($query->result_array() as $row){
                $centres[] = $row;
            }

            return $centres;
        }
    }
?>
