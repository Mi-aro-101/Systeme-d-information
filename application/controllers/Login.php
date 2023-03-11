<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('Login');
	}

	public function check(){
		$this->load->model('Entite');
		$value = $this->Entite->checkLogin($this->input->post('nom') , $this->input->post('pwd'));
		$this->session->set_userdata('identity',$value);

		$this->load->view('Accueuil');
	}
}
