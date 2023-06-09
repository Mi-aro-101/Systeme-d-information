<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiers_interaction extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Tiers_model');
    }

    public function index(){
        if ($this->session->flashdata('success_message')) {
            echo '<script>alert("' . $this->session->flashdata('success_message') . '");</script>';
        }
        $plantiers = $this->Tiers_model->findAll();
        $data = array('table'=> $plantiers);
        $this->template->write('title', 'Tiers', TRUE);
        $this->template->write_view('content', 'Tiers', $data);
        $this->template->render();
    }

    public function Supprimer($code){
        $this->Tiers_model->remove($code);
        redirect('index.php/Tiers_interaction');
    }

    public function Modifier($id){
        $table = $this->Tiers_model->getbyId($id);
        $table = array('table' => $table);
        $this->template->write('title', 'Tiers', TRUE);
        $this->template->write_view('content', 'FormModifTiers', $tale);
    }

    public function checkCode($code){
        if(strlen($code) > 13){
            throw new Exception("Votre code de compte depasse les 13 caracteres");
        }
        else {
            return true;
        }
    }

    public function validModification(){
        $code = $_GET['numerocompte'];
        $intitule = $_GET['intitule'];
        $idplantiers = $_GET['idplantiers'];
        try{
            $this->checkCode($code);
            $this->Tiers_model->modifier($idplantiers, $code, $intitule);
            $this->session->set_flashdata('success_message', 'Modifiee avec succes.');
            redirect('index.php/Tiers_interaction');
        }catch(Exception $e){
            $str1 = '<script language="javascript">alert("%s"); window.history.back();</script>';
            $str1 = sprintf($str1, $e->getMessage());
            echo $str1;
        }
    }
}
