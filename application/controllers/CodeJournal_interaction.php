<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CodeJournal_interaction extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('CodeJournal_model','CodeJournal');
    }

    public function index(){
        $codeJournal=$this->CodeJournal->findAll();
        $data=array('table'=>$codeJournal);
        $this->load->view('CodeJournal',$data);
    }

    public function Supprimer($idcodeJournal){
        $this->CodeJournal->remove($idcodeJournal);
        redirect(base_url('index.php/CodeJournal_interaction/index'));
    }
}
?>