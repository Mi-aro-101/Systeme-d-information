<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_tiers extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Tiers_model');
    }

	public function index()
	{
        $this->load->view('Template');
		$this->load->view('Insert_Tiers');
	}

    public function checkCode($code){
        if(strlen($code) > 13){
            throw new Exception("Votre code de compte depasse les 13 caracteres");
        }
        else {
            return $code;
        }
    }

    /**
     *The function that will call the insert in tiers_model
     */
    public function insert(){
        $code = $_POST['code'];
        try{
            $code = $this->checkCode($code);
            $libelle = $_POST['libelle'];
            echo $code;
            $this->Tiers_model->insertTiers($code, $libelle);
        }catch(Exception $e){
            echo $e->getMessage();
        }
        redirect("index.php/Accueil");
    }

    /**
     * Check the columnm from the csv
     */
    public function checkColumn($data){
        if(strcasecmp($data[0], 'code') == 1 || strcasecmp($data[1], 'intitule') == 1){
            throw new Exception('Les noms de colonne ne correspondent pas');
        }
    }

    /**
     * function that will upload the csv file imported
     */
    public function uploadcsv(){
        $handle = fopen($_FILES['file']['tmp_name'], 'r');
        $i = 0;
        $this->db->query('begin');
        while(($data = fgetcsv($handle, 10000, ',')) !== false){
            if($i == 0){
                try{
                    $this->checkColumn($data);
                }catch(Exception $e){
                    echo $e->getMessage();
                    break;
                }
            }

            $i++;

            if($i == 1){
                continue;
            }

            try{
                $data[0] = $this->checkCode($data[0]);

                $this->Tiers_model->insertTiers($data[0], $data[1]);
                $this->db->query('commit');
            }catch(Exception $e){
                echo $e->getMessage();
            }
            finally{
                $this->db->query('end');
            }
        }
        redirect("index.php/Accueil");
    }
}
