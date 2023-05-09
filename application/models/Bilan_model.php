<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    
    class Bilan_model extends CI_Model {
         /**
            *Provide the value of the actif brut 
            * @param int the compta code
            * @return array the sum of all the debit from this code
        */
        public function getCodeActifBrut($code){
            $query= "select sum(debit) as debit from v_get_".$code;
            $query = $this->db->query($query);
            $tab=$query-> result_array();
            return $tab[0][''];
        }
        
    }
?>