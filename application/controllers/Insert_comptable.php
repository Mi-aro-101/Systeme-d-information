<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_comptable extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Comptable_model');
    }

	public function index()
	{      
         $this->template->write('title', 'Code Comptable', TRUE);
        $this->template->write_view('content', 'Insert_Comptable', '' ,TRUE);
	}

    /**
     * @param code is the code inserted that need to be length checked
     */
    public function checkCode($code){
        if(strlen($code) < 5){
            $code = $this->extendStrlen($code);
        }
        else if(strlen($code) > 5){
            throw new Exception('La longueur de votre code doit etre <= 5');
        }

        return $code;
    }

    /**
     * @param $code is the code(compte) to force à avoir 5 caractères pas plus pas moins
     */
    public function extendStrlen($code){
        while(strlen($code) < 5){
            $code=$code.'0';
        }
        return $code;
    }

    /**
     * insert planComptable function
     * use extendStrlen to force the compte comptable ho 5 caractères
     */
    public function Insert(){
        $code = $_POST['code'];
        try{
            $code = $this->checkCode($code);
            $libelle = $_POST['libelle'];
            // echo $code;
            $this->Comptable_model->insertComptable($code, $libelle);
        }catch(Exception $e){
            echo $e->getMessage();
        }
        redirect("index.php/Accueil");
    }

    /**
     * Check the columnm from the csv
     */
    public function checkColumn($data){
        if(strcasecmp($data[0], 'code') == 0 || strcasecmp($data[1], 'libelle') == 1){
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
        try{
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

                    $data[0] = $this->checkCode($data[0]);
                    $data[0]=trim($data[0]," ");
                    $this->Comptable_model->insertComptable($data[0], $data[1]);
                    $this->db->query('commit');
                }
                redirect("index.php/Accueil");
        }catch(Exception $e){
            echo $e->getMessage();
            $this->db->query('rollback');
        }
        finally{
            $this->db->query('end');
        }
    }
}
