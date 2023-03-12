<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entite extends CI_Model {

	// public function getCurrval()
    // {
    //     $sql = "SELECT currval('entite_identite_seq')";
    //     $query = $this->db->query($sql);
    //     $value = $query->row_arrray();
    //     return $value['currval'];
    // }
    public function insertEntite($nomFondateur,$nomSociete,$numFisc,$siege,$dateCreation,$dateDebut,$objet,$numStat,$numReg,$deviseTC,$deviseEq,$pwd)
	{
        $sql = "INSERT INTO Entite VALUES('%s','%s')";
        $sql = sprintf($sql,$nomSociete,$pwd);
        $this->db->query($sql);
        $sql = "INSERT INTO details VALUES('%s','%s','%s','%s','%s','%s','%s','%s')";
        $sql = sprintf($sql,$val,$nomFondateur,$numFisc,$siege,$dateCreation,$objet,$numStat,$deviseTC,$deviseEq);
        $this->db->query($sql);
        $sql = "INSERT INTO exercice VALUES(default,'%s','%s')";
        $sql = sprintf($sql,);
        $this->db->query($sql);
    }
}
