<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comptable_model extends CI_Model {

    /**
     * @param $code is the 'compte' of the plancomptable
     *@param $libelle is the name of the 'compte'
     */
    public function insertComptable($code, $libelle){
        $query = ("INSERT INTO plancomptable VALUES(default, '%s', '%s')");
        $query = sprintf($query, $code, $libelle);
        $this->db->query($query);
    }
}
