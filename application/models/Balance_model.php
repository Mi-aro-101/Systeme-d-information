<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    
    class Balance_model extends CI_Model {
         /**
            * 
            * @return array array of all the balance
        */
        public function getBalance(){
            $query = ("select * from getBalance");
            $query = $this->db->query($query);
            $compte = array();

            foreach($query->result_array() as $row){
                $compte[] = $row;
            }

            return $compte;
        }
    }
?>