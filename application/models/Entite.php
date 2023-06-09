<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entite extends CI_Model {


    /**
     * get the current value of the serial idEntite
     * @param void
     */

	public function getCurrval(){
        $sql = "SELECT currval('entite_identite_seq')";
        $query = $this->db->query($sql);
        $value = $query->row_array();
        return $value['currval'];
    }

    /**
     * get the date of the end of one entity exercice
     * @param date
     */
    public function getNextYearDate($date){
        list($year,$month,$day) = explode("-",$date);
        $year = "".intval($year) + 1;
        if($month == '02' || $month == '2' && $day == '29'){
            $month = '03';
            $day = '01';
        }
        return $year."-".$month."-".$day;
    }

    /**
     * insert the form into the database
     * @param nom_Fondateur
     * @param nom_Societe
     * @param numero_Fiscale
     * @param siege
     * @param date_de_Creation_Entite
     * @param date_Debut_Exercice
     * @param objet
     * @param numStat
     * @param numero_Registre
     * @param devise_TC
     * @param devise_Equivalente
     * @param password
     */
    public function insertEntite($nomFondateur,$nomSociete,$numFisc,$siege,$dateCreation,$dateDebut,$objet,$numStat,$numReg,$deviseTC,$deviseEq,$pwd)
	{
        try{
            $this->db->query("BEGIN");
            $sql = "INSERT INTO Entite VALUES(default,'%s','%s')";
            $sql = sprintf($sql,$nomSociete,$pwd);
            $this->db->query($sql);
            $id = $this->getCurrval();
            $sql = "INSERT INTO details VALUES(%s,'%s','%s','%s','%s','%s','%s','%s','%s','%s')";
            $sql = sprintf($sql,$id,$nomFondateur,$numFisc,$siege,$dateCreation,$objet,$numStat,$numReg,$deviseTC,$deviseEq);
            $this->db->query($sql);
            $sql = "INSERT INTO exercice VALUES(default,%s,'%s','%s')";
            $sql = sprintf($sql,$id,$dateDebut,$this->getNextYearDate($dateDebut));
            // echo $sql;
            $this->db->query($sql);
            $this->db->query("COMMIT");
        }
        catch (Exception $e) {
            $this->db->query("ROLLBACK");
            throw $e;
        }finally{
            $this->db->query("END");
        }
    }

    public function update($nomFondateur,$nomSociete,$numFisc,$siege,$dateCreation,$objet,$numStat,$numReg,$deviseTC,$deviseEq,$id){
        try{
            $this->db->query("BEGIN");
            $sql = "UPDATE Entite SET nomentite = '%s' WHERE identite = %s";
            $sql = sprintf($sql,$nomSociete,$id);
            $sql = "UPDATE details SET nomfondateur = %s,numerofiscale = '%s',siege = '%s',datedecreation = '%s',objet = '%s',numerostatistique = '%s',numeroRegistre = '%s',devisetenuedecompte = '%s',deviseequivalence = '%s'WHERE identite = %s";
            $sql = sprintf($sql,$id,$nomFondateur,$numFisc,$siege,$dateCreation,$objet,$numStat,$numReg,$deviseTC,$deviseEq,$id);
            $this->db->query($sql);
            $this->db->query("COMMIT");
        }
        catch (Exception $e) {
            $this->db->query("ROLLBACK");
            throw $e;
        }finally{
            $this->db->query("END");
        }
    }

    public function checkLogin($nom,$pwd){
        $sql = "SELECT idEntite FROM entite WHERE nomentite = '%s' AND passwd = '%s'";
        $sql = sprintf($sql,$nom,$pwd);
        $query = $this->db->query($sql);
        $value = $query->row_array();
        return $value['identite'];
    }

    public function findAll($id){
        $sql = "SELECT * FROM ListeDetails WHERE identite = %s";
        $sql = sprintf($sql,$id);
        // echo $sql;
        $query = $this->db->query($sql);
        $value = $query->row_array();
        return $value;
    }
}
