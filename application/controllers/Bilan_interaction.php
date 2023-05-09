<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bilan_interaction extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Bilan_model','Bilan');
    }

    public function index(){
        // $data=array();
        $data= $this-> Balance-> getBalance();
        // return $data;
        $this->load->view('Template');
        $this->load->view('Bilan_result',$data);
    }
}