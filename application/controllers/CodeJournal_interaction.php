<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CodeJournal_interaction extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Codejournal_model','CodeJournal');
    }

    public function index(){
        $codeJournal=$this->CodeJournal->findAll();
        $data=array('table'=>$codeJournal);
        $this->load->view('Template');
        $this->load->view('CodeJournal',$data);
    }

    /**
     * delete codeJounal function
     */

    public function Supprimer($idcodeJournal){
        $this->CodeJournal->remove($idcodeJournal);
        redirect(base_url('index.php/CodeJournal_interaction/index'));
    }

    /**
     * redirect to update page
     * take the id and send the object to the update page
     * @param int $idCodeJournal 
     */
    public function Modifier($idcodeJournal){
        $codeJournal=$this->CodeJournal->findById($idcodeJournal);
        $data=array('table'=>$codeJournal);
        $this->load->view('Template');
        $this->load->view('Update_CodeJournal',$data);
    }

    /**
     * update the code journal
     */
    public function update(){
        $id=$this->input->post('idcodejournal');
        $code=$this->input->post('code');
        $intitule=$this->input->post('intitule');
        $this->CodeJournal->update($id,$code,$intitule);
        redirect(base_url('index.php/CodeJournal_interaction/index'));
    }
}
?>