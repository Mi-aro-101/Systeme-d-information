<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Journal_model extends CI_Model {

        /**
         * @param string $code reference of the libelle
         * @param string $libelle is the name of the code 
         */
        public function insert($dateEntree,$idCodeJournal,$numPiece,$idPlanComptable,$idPlantiers,$libelle,$idDevise,$debit,$credit){
            $query = "INSERT INTO codejournal VALUES(default,%s, %s, '%s',%s,'%s',%s,%s,'%s',%s,%s,%s)";
            $query = sprintf($query, $_SESSION['identity'],$dateEntree,$idCodeJournal,$numPiece,$idPlanComptable,$idPlantiers,$libelle,$idDevise,$debit,$credit);

            // echo $query;
            $this->db->query($query);
        }
    }
?>