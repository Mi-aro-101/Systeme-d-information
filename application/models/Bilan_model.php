<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    
    class Bilan_model extends CI_Model {
          /**
            *Provide the value of the passif 
            * @param int the compta code
            * @return array the sum of all the debit from this code
        */
        public function getOnePassif($code){
            $query= "select sum(credit) as credit from v_get_".$code;
            $query = $this->db->query($query);
            $tab=$query-> result_array();
            $result=  $tab[0]['credit'];
                if($result == null){ $result = 0; }
            return $result;
        }
        /**
            *Provide the array of all code passif
            * @param int the compta code
            * @return array the sum of all the debit from this code
        */
        public function getAllCodePassif(){
            $data= array();
            // all 2
            $data['cent1']= $this->getOnePassif(101);
            $data['cent6']= $this->getOnePassif(106);
            $data['onze']= $this->getOnePassif(11);
            $data['douze8']= $this->getOnePassif(128);

            $data['treize']= $this->getOnePassif(13);
            $data['cent61']= $this->getOnePassif(161);
            $data['cent65']= $this->getOnePassif(165);
            $data['quatre']= $this->getOnePassif(4);
            $data['quarante1']= $this->getOnePassif(41);
            $data['cinquante']= $this->getOnePassif(5);

            $data['totalCapitaux'] = $data['cent1'] + $data['cent6'] + $data['onze']+$data['douze8'];
            $data['totalNonCourant'] = $data['treize'] +  $data['cent61'];
            $data['totalCourant'] = $data['cent65'] + $data['quatre'] + $data['quarante1'] +  $data['cinquante'];
            $data['totalPassif'] =  $data['totalCapitaux'] + $data['totalNonCourant'] + $data['totalCourant'] ;
            return $data;
        }

         /**
            *Provide the value of the actif brut 
            * @param int the compta code
            * @return array the sum of all the debit from this code
        */
        public function getOneCodeActifBrut($code){
            $query= "select sum(debit) as debit from v_get_".$code;
            $query = $this->db->query($query);
            $tab=$query-> result_array();
            $result=  $tab[0]['debit'];
                if($result == null){ $result = 0; }
            return $result;
        }


         /**
            *Provide the array of all code actif brut
            * @param int the compta code
            * @return array the sum of all the debit from this code
        */
        public function getAllCodeActifBrut(){
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
            $data['totalNonCourant'] = $data['vingt']+$data['vingt1']+$data['vingt2']+$data['vingt3']+$data['vingt5']+$data['treize'];
            $data['totalCourant'] = $data['trente']+$data['quatre']+$data['quarante1']+$data['cinquante'];
            $data['totalActif'] = $data['totalNonCourant'] + $data['totalCourant'] ;
            return $data;
        }
        /**
            *Provide the value of the actif brut 
            * @param int the compta code
            * @return array the sum of all the debit from this code
        */
        public function getOneCodeActifNet($code){
            $query= "select sum(credit) as credit from v_get_".$code;
            $query = $this->db->query($query);
            $tab=$query-> result_array();
            $result=  $tab[0]['credit'];
                if($result == null){ $result = 0; }
            return $result;
        }
        /**
            *Provide the array of all code actif brut
            * @param int the compta code
            * @return array the sum of all the debit from this code
        */
        public function getAllCodeActifNet(){
            $data= array();
            // all 2
            $data['vingt']= $this->getOneCodeActifNet(280);
            $data['vingt1']= $this->getOneCodeActifNet(281);
            $data['vingt2']= $this->getOneCodeActifNet(282);
            $data['vingt3']= $this->getOneCodeActifNet(283);
            $data['vingt5']= $this->getOneCodeActifNet(285);
            // all 13
            // $data['treize']= $this->getOneCodeActifNet(13);
            //all 3
            $data['trente']= $this->getOneCodeActifNet(39);
             //all 4
             $data['quatre']= $this->getOneCodeActifNet(49);
            //all 41
            $data['quarante1']= $this->getOneCodeActifNet(491);
            //all 5
            // $data['cinquante']= $this->getOneCodeActifNet(5);
            $data['totalNonCourant'] = $data['vingt']+$data['vingt1']+$data['vingt2']+$data['vingt3']+$data['vingt5'];
            $data['totalCourant'] = $data['trente']+$data['quatre']+$data['quarante1'];
            $data['totalActif'] = $data['totalNonCourant'] + $data['totalCourant'] ;
            return $data;
        }

        
    }
?>