<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compte_interaction extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Comptable_model');
    }

    public function index(){
        if ($this->session->flashdata('success_message')) {
            echo '<script>alert("' . $this->session->flashdata('success_message') . '");</script>';
        }
        $plancomptable = $this->Comptable_model->findAll();
        $data = array('table'=> $plancomptable);
        $this->template->write('title', 'Balance', TRUE);
        $this->template->write_view('content', 'Comptable', $data);
        $this->template->render();    
    }

    public function Supprimer($code){
        $this->Comptable_model->remove($code);
        redirect('index.php/Compte_interaction');
    }

    public function Modifier($id){
        $table = $this->Comptable_model->getbyId($id);
        $table = array('table' => $table);
        $this->template->write('title', 'Code Comptable', TRUE);
        $this->template->write_view('content', 'FormModifCompte', $data);
        $this->template->render();    
    }

    /**
     * @param $code is the code(compte) to force à avoir 5 caractères pas plus pas moins
     */
    public function extendStrlen($code){
        while(strlen($code) < 5){
            $code=$code.'0';
        }
        return $code;
    }

    public function checkCode($code){
        if(strlen($code) < 5){
            $code = $this->extendStrlen($code);
        }
        else if(strlen($code) > 5){
            throw new Exception('La longueur de votre code doit etre <= 5');
        }

        return $code;
    }

    public function validModification(){
        $code = $_GET['code'];
        $intitule = $_GET['intitule'];
        $idplancomptable = $_GET['idplancomptable'];
        try{
            $code = $this->checkCode($code);
            $this->Comptable_model->modifier($idplancomptable, $code, $intitule);
            $this->session->set_flashdata('success_message', 'Modifiee avec succes.');
            redirect('index.php/Compte_interaction');
        }catch(Exception $e){
            $str1 = '<script language="javascript">alert("%s"); window.history.back();</script>';
            $str1 = sprintf($str1, $e->getMessage());
            echo $str1;
        }
    }

    public function Search(){
        $code= $this->input->post('plansearch');
        $plan= $this->Comptable_model->search($code);
        $data = array('table' => $plan);      
        $this->template->write('title', 'Code Comptable', TRUE);
        $this->template->write_view('content', 'Comptable', $data);
        $this->template->render();    
    }
}
