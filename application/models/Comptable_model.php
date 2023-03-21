<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comptable_model extends CI_Model {

    // /**
    //  * @param string $code to search
    //  * @return array of all the result of the search
    //  */
    // public function search($code){
    //     $query = ("SELECT * from codejournal where code like '".$code."%'");
    //     $query = sprintf($query, $code);
    //     $result=$this->db->query($query);
    //     $codejournal=array();
    //     foreach($result->result_array() as $row){
    //         $codejournal[]=$row;
    //     }
    //     return $codejournal;
    // }

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

    public function getbyId($id){
        $query = ("select * from plancomptable where idplancomptable = '%s'");
        $query = sprintf($query, $id);
        $query = $this->db->query($query);
        $comptable = array();

        foreach($query->result_array() as $row){
            $comptable[] = $row;
        }

        return $comptable[0];
    }

    public function getbyEntity($entity){
        $query = ("select * from plancomptable where identite = '%s'");
        $query = sprintf($query, $entity);
        $query = $this->db->query($query);
        $comptable = array();

        foreach($query->result_array() as $row){
            $comptable[] = $row;
        }

        return $comptable;
    }

    public function modifier($idplancomptable, $code, $intitule){
        $query = ("UPDATE plancomptable set code = '%s', intitule = '%s' where idplancomptable='%s'");
        $query = sprintf($query, $code, $intitule, $idplancomptable);
        echo $query;
        $this->db->query($query);
    }

    /**
     * @param string $code to search
     * @return array of all the result of the search
     */
    public function search($code){
        $code= strtolower($code);
        $query = ("SELECT * from plancomptable");
        $result=$this->db->query($query);
        $codejournal=array();
        foreach($result->result_array() as $row){
            $codejournal[]=$row;
        }

        $res = [];
        $i = 0;

        foreach($codejournal as $journal){
            if(str_contains(strtolower($journal['code']), $code) || str_contains(strtolower($journal['intitule']), $code)){
                $res[$i] = $journal;
                $i+=1;
            }
        }

        return $res;
    }
}
