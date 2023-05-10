<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bilan_interaction extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Bilan_model','Bilan');
    }

    public function index(){
        $this->template->write('title', 'Bilan', TRUE);
        $this->template->write_view('content', 'Bilan_result', $data);
        $this->template->render();
    }
}
