<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_codeJournal extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Codejournal_model','CodeJournal');
    }
    
    public function index(){
        $this->template->write('title', 'Code Journal', TRUE);
        $this->template->write_view('content', 'Insert_CodeJournal', '' ,TRUE);
    }

     /**
     * insert codeJounal function
     */
    public function insert(){
        $code=$this->input->post('code');
        $intitule=$this->input->post('intitule');
        $this->CodeJournal->insert($code,$intitule);
        redirect(base_url('index.php/Insert_codeJournal/index'));


    }
}
?>