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
    public function Search(){
        $code= $this->input->post('plansearch');
        $plan= $this->Comptable_model->search($code);
        $data = array('table' => $plan);
        $this-> load->view('Comptable_searchResult',$data);
    }
}
