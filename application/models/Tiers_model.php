<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiers_model extends CI_Model {

    /**
     * @param $code is the 'compte' of the plancomptable
     * @param $libelle is the name of the 'compte'
     */
    public function insertTiers($code, $libelle){
        $query = ("INSERT INTO plantiers VALUES(default, '%s', '%s', '%s')");
        $query = sprintf($query, $_SESSION['identity'],$code, $libelle);
        $this->db->query($query);
    }

    public function findAll(){
        $query = ("select * from plantiers");
        $query = $this->db->query($query);
        $tiers = array();

        foreach($query->result_array() as $row){
            $tiers[] = $row;
        }

        return $tiers;
    }

    public function remove($code){
        $query = ("DELETE from plantiers where idplantiers='%s'");
        // echo $query;
        $query = sprintf($query, $code);
        $this->db->query($query);
    }

    public function getbyId($id){
        $query = ("select * from plantiers where idplantiers = '%s'");
        $query = sprintf($query, $id);
        $query = $this->db->query($query);
        $tiers = array();

        foreach($query->result_array() as $row){
            $tiers[] = $row;
        }

        return $tiers[0];
    }

    public function getbyEntity($entity){
        $query = ("select * from plantiers where identite = '%s'");
        $query = sprintf($query, $entity);
        $query = $this->db->query($query);
        $comptable = array();

        foreach($query->result_array() as $row){
            $comptable[] = $row;
        }

        return $comptable;
    }

    public function modifier($idplantiers, $code, $intitule){
        $query = ("UPDATE plantiers set numerocompte = '%s', intitule = '%s' where idplantiers='%s'");
        $query = sprintf($query, $code, $intitule, $idplantiers);
        echo $query;
        $this->db->query($query);
    }
}
