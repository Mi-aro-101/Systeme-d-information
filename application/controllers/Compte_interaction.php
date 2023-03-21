<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compte_interaction extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Comptable_model');
    }

    public function index(){
        $plancomptable = $this->Comptable_model->findAll();
        $data = array('table'=> $plancomptable);
        $this->load->view('Comptable', $data);
    }

    public function Supprimer($code){
        $this->Comptable_model->remove($code);

        redirect('index.php/Compte_interaction');
    }

    public function Modifier($id){
        $table = $this->Comptable_model->getbyId($id);
        $table = array('table' => $table);
        $this->load->view('FormModifCompte', $table);
    }

    public function checkCode($code){
        if(strlen($code) > 5){
            throw new Exception("Votre code de compte depasse les 13 caracteres");
        }
        else {
            return true;
        }
    }

    public function validModification(){
        $code = $_GET['code'];
        $intitule = $_GET['intitule'];
        $idplancomptable = $_GET['idplancomptable'];
        try{
            $this->checkCode($code);
            $this->Comptable_model->modifier($idplancomptable, $code, $intitule);
            redirect('index.php/Compte_interaction');
        }catch(Exception $e){
            echo $e;
            echo $e->getMessage();
        }
    }

    public function Search(){
        $code= $this->input->post('plansearch');
        $plan= $this->Comptable_model->search($code);
        $data = array('table' => $plan);
        $this-> load->view('Comptable_searchResult',$data);
    }
}
