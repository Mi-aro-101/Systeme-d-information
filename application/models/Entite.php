<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entite extends CI_Model {

	public function getCurrval()
    {
        $sql = "SELECT currval('entite_identite_seq')";
        $query = $this->db->query($sql);
        $value = $query->row_arrray();
        return $value['currval'];
    }
    public function getNextYearDate($date){
        list($year,$month,$day) = explode("-",$date);
        $year = "".intval($year) + 1;
        if($month == '02' || $month == '2' && $day == '29'){
            $month = '03';
            $day = '01';
        }
        return $year.$month.$day;
    }
    public function insertEntite($nomFondateur,$nomSociete,$numFisc,$siege,$dateCreation,$dateDebut,$objet,$numStat,$numReg,$deviseTC,$deviseEq,$pwd)
	{
        try{             
            $sql = "BEGIN;INSERT INTO Entite VALUES(default,'%s','%s')";
            $sql = sprintf($sql,$nomSociete,$pwd);
            $this->db->query($sql);
            $id = getCurrval();
            $sql = "INSERT INTO details VALUES(%i,'%s','%s','%s','%s','%s','%s','%s','%s')";
            $sql = sprintf($sql,$id,$val,$nomFondateur,$numFisc,$siege,$dateCreation,$objet,$numStat,$deviseTC,$deviseEq);
            $this->db->query($sql);
            $sql = "INSERT INTO exercice VALUES(default,'%s','%s')";
            $sql = sprintf($sql,$dateDebut,getNextYearDate($dateDebut));
            $this->db->query($sql);
            $this->db->query("COMMIT");
        }
        catch (Exception $e) {
            $this->db->query("ROLLBACK");  
            throw $e;
        }
    }
}
