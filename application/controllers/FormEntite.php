<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormEntite extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Entite');
    }

	public function index(){
        try{
            // load base_url
            $this->load->helper('url');
            // Check form submit or not
            if($this->input->post('upload') != NULL ){
                $data = array();
                if(!empty($_FILES['file']['name'])){
                // Set preference
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '100'; // max_size in kb
                $config['file_name'] = $_FILES['file']['name'];
                // Load upload library
                $this->load->library('upload',$config);
                    // File upload
                    if($this->upload->do_upload('file')){
                        // Get data about the file
                        $uploadData = $this->upload->data();
                        $filename = $uploadData['file_name'];$data['response'] = 'successfully uploaded '.$filename;
                    }else{
                        $data['response'] = 'failed';
                    }
                }else{
                    $data['response'] = 'failed';
                }
            }
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
            $this->Entite->insertEntite($nomFondateur,$nomSociete,$numFisc,$siege,$dateCreation,$dateDebut,$objet,$numStat,$numReg,$deviseTC,$deviseEq,$pwd,$_FILES['file']['name']);
            redirect(site_url('index.php/Login'));
        }catch(Exception $e){
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
	}
}