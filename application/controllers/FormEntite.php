<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormEntite extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->view('Template');
        $this->load->model('Entite');
    }

	public function index(){
        try{
            $nomFondateur = $this->input->post('fondateur');
            $nomSociete = $this->input->post('nomSociete');
            $numFisc = $this->input->post('numeroFiscale');
            $siege = $this->input->post('siege');
            $dateCreation = $this->input->post('creation');
            $dateDebut = $this->input->post('debutExo');
            $objet = $this->input->post('objet');
            $numStat = $this->input->post('numStat');
            $numReg = $this->input->post('numRegistre');
            $deviseTC = $this->input->post('tenueCompte');
            $deviseEq = $this->input->post('equivalence');
            $pwd = $this->input->post('mdp');
            $this->Entite->insertEntite($nomFondateur,$nomSociete,$numFisc,$siege,$dateCreation,$dateDebut,$objet,$numStat,$numReg,$deviseTC,$deviseEq,$pwd);
            $this->session->set_flashdata('success_message', 'Inseree avec succes.');
            redirect(site_url('index.php/Login'));
        }catch(Exception $e){
            $str1 = '<script language="javascript">alert("%s"); window.history.back();</script>';
            $str1 = sprintf($str1, $e->getMessage());
            echo $str1;
        }
	}
}
