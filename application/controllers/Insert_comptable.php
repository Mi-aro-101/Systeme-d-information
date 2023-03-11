<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_comptable extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Comptable_model');
    }

	public function index()
	{
		$this->load->view('Insert_Comptable');
	}

    /**
     * @param $code to force à avoir 5 caractères pas plus pas moins
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
        if(strlen($code) < 5){
            $code = $this->extendStrlen($code);
        }
        $libelle = $_POST['libelle'];
        echo $code;
        // $this->insertComptable($code, $libelle);
    }

    public function uploadcsv(){
        $handle = fopen($_FILES['file']['tmp_name'], 'r');

        $this->db->query('begin');
        while(($data = fgetcsv($handle, 10000, ',')) !== false){
            $i++;
            if(i == 1){
                continue;
            }

            if(strlen($data[0]) < 5){
                $data[0] = $this->extendStrlen($data[0])
            }

            try {
                $this->insertComptable($data[0], $data[1]);
                $this->db->query('commit');
            } catch (Exception $e) {
                $this->db->query('rollback');
                throw $e;
            }
            finally{
                $this->db->query('end');
            }
        }
    }
}
