<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {
    public function get_list_admin() {
     $query = $this->db->query('select * from admin');
      $admin = array();
      $i = 0 ;
      //| ida | nom  | prenom | email           | mdp   |
      foreach($query->result_array() as $donne){
        $admin[$i]['ida'] = $donne['ida'];
        $admin[$i]['nom'] = $donne['nom'];
        $admin[$i]['prenom'] = $donne['prenom'];
        $admin[$i]['email'] = $donne['email'];
        $admin[$i]['mdp'] = $donne['mdp'];
        $i++;
      }
      return $admin;
    }
    public function get_list_categorie() {
        $query = $this->db->query('select * from categorie');
         $categorie = array();
         $i = 0 ;
         foreach($query->result_array() as $donne){
           $categorie[$i]['idc'] = $donne['idCategorie'];
           $categorie[$i]['nom'] = $donne['nom'];
           $i++;
         }
         return $categorie;
       }
    public function insert_new_Categorie($categorie) {
       $sql = "insert into categorie(nom) values (%s)";
        $sql = sprintf($sql,$this->db->escape($categorie));
        $this->db->query($sql);
    }
    public function get_number_user() {
        $query = $this->db->query('select count(idclient) isa from clients');
        $row = $query->row_array();
        return $row['isa'];
    }
    public function get_number_fait() {
        $query = $this->db->query('select count(*) isa from affaires where dateAcceptation is not null');
        $row = $query->row_array();
        return $row['isa'];
    }
    public function update_the_Categorie($categorie,$id) {
         $sql = " update categorie set nom=%s where idCategorie=%s";
         $sql = sprintf($sql,$this->db->escape($categorie),$this->db->escape($id));
         $this->db->query($sql);
     }
}
