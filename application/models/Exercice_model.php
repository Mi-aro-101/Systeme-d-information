<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercice_model extends CI_Model {
    public function getbyEntity($entity){
        $query = ("select * from Exercice where identite = '%s'");
        $query = sprintf($query, $entity);
        $query = $this->db->query($query);
        $comptable = array();

        foreach($query->result_array() as $row){
            $comptable[] = $row;
        }

        return $comptable;
    }

    public function checkDate($date){
        $query = ("select * from Exercice where identite = '%s' and '%s'>debutexercice and '%s'< finexercice");
        $query = sprintf($query, $_SESSION['identity'], $date, $date);
        $query = $this->db->query($query);
        $comptable = array();

        foreach($query->result_array() as $row){
            $comptable[] = $row;
        }

        if(count($comptable) == 0){
            throw new Exception("Votre date n'est pas considere, verifier votre date de debut et fin d'exercice");
        }

        return true;
    }
}
