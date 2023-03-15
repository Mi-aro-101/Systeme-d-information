<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CodeJournal_model extends CI_Model {
    /**
     * @param string $code reference of the libelle
     * @param string $libelle is the name of the code 
     */
    public function insert($code, $libelle){
        $query = "INSERT INTO codejournal VALUES(default,%s, '%s', '%s')";
        $query = sprintf($query, $_SESSION['identity'],$code, $libelle);
        // echo $query;
        $this->db->query($query);
    }


    /**
     * @return array of all CodeJournal
     */
    public function findAll(){
        $query = ("select * from codejournal");
        $query = $this->db->query($query);
        $code = array();

        foreach($query->result_array() as $row){
            $code[] = $row;
        }

        return $code;
    }
    
         /**
     * @param string $id of the code_journal to update
     * @param string $code of the code_journal to update
     * @param string $intitule of the code_journal to update
     * 
     */
    public function update($id,$code,$intitule){
        $query = ("UPDATE from codejournal set code='%s',intitule='%s' where idcodejournal=%s");
        $query = sprintf($query,$code,$intitule,$id);
        $this->db->query($query);
    }

    /**
     * @param string $id of the code_journal to remove
     */
    public function remove($id){
        $query = ("DELETE from codejournal where idcodejournal=%s");
        $query = sprintf($query, $id);
        $this->db->query($query);
    } 

    /**
     * @param string $code to search 
     * @return array of all the result of the search
     */
    public function search($code){
        $query = ("SELECT * from codejournal where code like '".$code."%'");
        $query = sprintf($query, $code);
        $result=$this->db->query($query);
        $codejournal=array();
        foreach($result->result_array() as $row){
            $codejournal[]=$row;
        }
        return $codejournal;
    }   
}
?>