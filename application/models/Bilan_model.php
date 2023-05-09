<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    
    class Bilan_model extends CI_Model {
         /**
            *Provide the value of the actif brut 
            * @param int the compta code
            * @return array the sum of all the debit from this code
        */
        public function getOneCodeActifBrut($code){
            $query= "select sum(debit) as debit from v_get_".$code;
            $query = $this->db->query($query);
            $tab=$query-> result_array();
            return $tab[0]['debit'];
        }


         /**
            *Provide the array of all code actif brut
            * @param int the compta code
            * @return array the sum of all the debit from this code
        */
        public function getAllCodeActifBrut($code){
            $data= array();
            // all 2
            $data['vingt']= $this->getOneCodeActifBrut(20);
            $data['vingt1']= $this->getOneCodeActifBrut(21);
            $data['vingt2']= $this->getOneCodeActifBrut(22);
            $data['vingt3']= $this->getOneCodeActifBrut(23);
            $data['vingt5']= $this->getOneCodeActifBrut(25);
            // all 13
            $data['treize']= $this->getOneCodeActifBrut(13);
            //all 3
            $data['trente']= $this->getOneCodeActifBrut(3);
             //all 4
             $data['quatre']= $this->getOneCodeActifBrut(4);
            //all 41
            $data['quarante1']= $this->getOneCodeActifBrut(41);
            //all 5
            $data['cinquante']= $this->getOneCodeActifBrut(5);
            
            return $data;
        }
        /**
            *Provide the value of the actif brut 
            * @param int the compta code
            * @return array the sum of all the debit from this code
        */
        public function getOneCodePassifBrut($code){
            $query= "select sum(credit) as credit from v_get_".$code;
            $query = $this->db->query($query);
            $tab=$query-> result_array();
            return $tab[0]['credit'];
        }
        
    }
?>