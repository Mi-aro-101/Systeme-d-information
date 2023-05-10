<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    
    class Actif_model extends CI_Model {

        public function get20(){
            $query = ("select * from v_get_20");
            $query = $this->db->query($query);
            $compte = $query->row_array();
            return $compte;
        }
        public function get21(){
            $query = ("select * from v_get_21");
            $query = $this->db->query($query);
            $compte = $query->row_array();
            return $compte;
        }
        public function get22(){
            $query = ("select * from v_get_22");
            $query = $this->db->query($query);
            $compte = $query->row_array();
            return $compte;
        }
        public function get23(){
            $query = ("select * from v_get_23");
            $query = $this->db->query($query);
            $compte = $query->row_array();
            return $compte;
        }        
        public function get25(){
            $query = ("select * from v_get_25");
            $query = $this->db->query($query);
            $compte = $query->row_array();
            return $compte;
        }        
        public function get13(){
            $query = ("select * from v_get_13");
            $query = $this->db->query($query);
            $compte = $query->row_array();
            return $compte;
        }

        public function getTotalNonCourant(){
            return ((get20())+(get21())+(get22())+(get23())+(get25())(get13()));
        }
    }
?>