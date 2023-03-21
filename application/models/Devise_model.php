<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devise_model extends CI_Model {
    public function findAll(){
        $query = ("select * from Devise");
        $query = $this->db->query($query);
        $code = array();

        foreach($query->result_array() as $row){
            $code[] = $row;
        }

        return $code;
    }
}
