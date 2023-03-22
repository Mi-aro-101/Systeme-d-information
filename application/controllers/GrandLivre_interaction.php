<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class GrandLivre_interaction extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('GrandLivre_model','Grandlivre');
        }

        public function index(){
            $this->load-> view('GrandLivre');
        }
        public function afficher(){
            $code= $this->input->post('plansearch');
            $livre= $this->Grandlivre-> getOneGrangLivre($code);
            $table = array('table' => $livre);
            $this-> load-> view('GrandLivre_result',$table);
        }

    }
?>