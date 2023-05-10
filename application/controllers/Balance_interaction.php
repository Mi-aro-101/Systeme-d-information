<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Balance_interaction extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('Balance_model','Balance');
        }

        public function index(){
            $all= $this-> Balance-> getBalance();
            $table = array('table' => $all);
            $this->template->write('title', 'Balance', TRUE);
            $this->template->write_view('content', 'Balance_result', $table);
            $this->template->render();    
        }
    }
?>