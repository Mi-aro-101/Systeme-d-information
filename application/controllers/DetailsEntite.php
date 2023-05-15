<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailsEntite extends CI_Controller {


	public function index(){
        $this->load->model('Entite');
        $id = $this->session->userdata('identity');
        // echo $id;
        $data['values'] = $this->Entite->findAll($id);
        $this->template->write('title', 'Detail Entite', TRUE);
        $this->template->write_view('content', 'DetailsEntite', $data);
        $this->template->render();
    }

    public function pageModif(){
        $this->load->model('Entite');
        $id = $this->session->userdata('identity');
        // echo $id;
        $data['values'] = $this->Entite->findAll($id);
        $this->template->write('title', 'Update Entite', TRUE);
        $this->template->write_view('content', 'UpdateEntite', $data);
        $this->template->render();
    }

    public function update(){
        $this->load->model('Entite');
        $id = $this->session->userdata('identity');
        // echo $id;
        $nomFondateur = $this->input->post('fondateur');
        $nomSociete = $this->input->post('nomSociete');
        $numFisc = $this->input->post('numeroFiscale');
        $siege = $this->input->post('siege');
        $dateCreation = $this->input->post('creation');
        // $dateDebut = $this->input->post('debutExo');
        $objet = $this->input->post('objet');
        $numStat = $this->input->post('numStat');
        $numReg = $this->input->post('numRegistre');
        $deviseTC = $this->input->post('tenueCompte');
        $deviseEq = $this->input->post('equivalence');
        $this->Entite->update($nomFondateur,$nomSociete,$numFisc,$siege,$dateCreation,$objet,$numStat,$numReg,$deviseTC,$deviseEq,$id);
        redirect('Accueil');
    }
}
