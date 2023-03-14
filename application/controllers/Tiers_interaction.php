<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiers_interaction extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Tiers_model');
    }

    public function index(){
        $plantiers = $this->Tiers_model->findAll();
        $data = array('table'=> $plantiers);
        $this->load->view('Tiers', $data);
    }

    public function Supprimer($code){
        $this->Tiers_model->remove($code);
        redirect('index.php/Tiers_interaction');

    }
}
