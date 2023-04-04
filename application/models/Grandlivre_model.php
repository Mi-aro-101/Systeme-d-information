<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    
    class Grandlivre_model extends CI_Model {
            /**
         * @param string $code is the 'compte' of the plancomptable
         * @return array array of  the grand livre of the specified code
         */
        public function getOneGrangLivre($code){
            $query = ("select * from getGrandlivre('%s')");
            $query= sprintf($query,$code);
            $query = $this->db->query($query);
            $compte = array();

            foreach($query->result_array() as $row){
                $compte[] = $row;
            }

            return $compte;
        }
    }
?>