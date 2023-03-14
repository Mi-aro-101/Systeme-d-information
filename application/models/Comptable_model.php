<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comptable_model extends CI_Model {

    /**
     * @param $code is the 'compte' of the plancomptable
     * @param $libelle is the name of the 'compte'
     */
    public function insertComptable($code, $libelle){
        $query = ("INSERT INTO plancomptable VALUES(%s, '%s', '%s')");
        $query = sprintf($query, $_SESSION['identity'],$code, $libelle);
        $this->db->query($query);
    }

    public function findAll(){
        $query = ("select * from plancomptable");
        $query = $this->db->query($query);
        $compte = array();

        foreach($query->result_array() as $row){
            $compte[] = $row;
        }

        return $compte;
    }

    public function remove($code){
        $query = ("DELETE from plancomptable where code='%s'");
        $query = sprintf($query, $code);
        $this->db->query($query);
    }
}
