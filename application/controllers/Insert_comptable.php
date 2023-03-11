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

    public function extendStrlen($code){
        while(strlen($code) < 5){
            $code=$code.'0';
        }

        return $code;
    }

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

    }
}
