<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Journal_model extends CI_Model {

        /**
         * @param string $code reference of the libelle
         * @param string $libelle is the name of the code 
         */
        public function insert($dateEntree,$idCodeJournal,$numPiece,$idPlanComptable,$idPlantiers,$libelle,$debit,$credit){
            $query = "INSERT INTO journal (identite, dateentree, idcodejournal, numpiece, idplancomptable, idplantiers, libelle, debit, credit) VALUES(%s,'%s',%s,'%s',%s,%s,'%s',%s,%s)";
            $query = sprintf($query, $_SESSION['identity'],$dateEntree,$idCodeJournal,$numPiece,$idPlanComptable,$idPlantiers,$libelle,$debit,$credit);

            echo $query;
            $this->db->query($query);
        }
    }
?>