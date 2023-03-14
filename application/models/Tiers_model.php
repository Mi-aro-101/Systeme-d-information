<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiers_model extends CI_Model {

    /**
     * @param $code is the 'compte' of the plancomptable
     * @param $libelle is the name of the 'compte'
     */
    public function insertTiers($code, $libelle){
        $query = ("INSERT INTO plantiers VALUES(%s, '%s', '%s')");
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
        $query = ("DELETE from plantiers where numerocompte='%s'");
        echo $query;
        $query = sprintf($query, $code);
        $this->db->query($query);
    }
}
