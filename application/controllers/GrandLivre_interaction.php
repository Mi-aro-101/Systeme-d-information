<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class GrandLivre_interaction extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('Grandlivre_model','Grandlivre');
        }

        public function index(){
            $this->template->write('title', 'Grand Livre', TRUE);
            $this->template->write_view('content', 'GrandLivre', '' , TRUE);
            $this->template->render();    
        }
        public function afficher(){
            $code= $this->input->post('plansearch');
            $livre= $this->Grandlivre-> getOneGrangLivre($code);
            $table = array('table' => $livre);
            $this->load->view('Template');
            $this-> load-> view('GrandLivre_result',$table);
            $this->template->write('title', 'Grand Livre', TRUE);
            $this->template->write_view('content', 'GrandLivre_result', $data);
        }

    }
?>