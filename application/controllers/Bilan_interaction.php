<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bilan_interaction extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Bilan_model','Bilan');
    }

    public function index(){
        $data=array();
        $actifBrut= $this-> Bilan ->getAllCodeActifBrut();
        $actifNet= $this-> Bilan ->getAllCodeActifNet();
        $passif= $this-> Bilan -> getAllCodePassif();

        $data['actifBrut'] = $actifBrut;
        $data['actifNet'] = $actifNet;
        $data['passif'] = $passif;
        // return $data;
        // $this->load->view('Template');
        // $this->load->view('Actif_result',$data);
        // $this->load->view('Passif_result',$data);
        $this->template->write('title','Bilan',TRUE);
        $this->template->write_view('content','Actif_result',$data);
        $this->template->write_view('content','Passif_result',$data);
        $this->template->render();
    }
}
