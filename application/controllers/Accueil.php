<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {


	public function index(){
        $this->template->write('title','Accueil',TRUE);
        $this->template->write_view('content','Accueil','',TRUE);
        $this->template->render();
       }
}
