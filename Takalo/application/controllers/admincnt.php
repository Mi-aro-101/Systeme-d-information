<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admincnt extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function login()
	{
		$this->load->view('loginAdmin.php');	
	}
    public function loginWithError1()
    {
        $error['erreur'] = 'Diso ny mail nalefanao';
        $this->load->view('loginAdmin.php',$error);
    }
    public function loginWithError2()
    {
        $error['erreur'] = 'Diso ny kaody miafina nalefanao';
        $this->load->view('loginAdmin.php',$error);
    }
    public function loginWithError3()
    {
        $error['erreur'] = 'Diso ireo information nalefanao';
        $this->load->view('loginAdmin.php',$error);
    }
    public function logtrait(){
        $email = $this->input->post('mail');
        $mdp = $this->input->post('code');
        if(strlen(trim($email))==0 || strlen(trim($mdp))==0 ){
            $this->load->view('loginAdmin.php');	
        }else{
            $this->load->model('admin_model');
            $admin = $this->admin_model->get_list_admin();
            $erreur = 0;
            foreach ($admin as $ad) {
                if ($ad['email'] == $email && $mdp == $ad['mdp']) {   
                    $erreur = 1;
                    break;
                }
            }
            if ($erreur == 0) {
                if ($ad['email'] != $email && $mdp == $ad['mdp']) {
                    redirect('admincnt/loginWithError1');
                }else if($ad['email'] == $email && $mdp != $ad['mdp']){
                    redirect('admincnt/loginWithError2');
                }else if($ad['email'] != $email && $mdp != $ad['mdp']){
                    redirect('admincnt/loginWithError3');
                }
            }else{
                $this->load->view('AccueilAdmin.php');
            }
        }
    }
    public function paracat()
	{
        $data = array();
        $this->load->model('admin_model');
        $data['categorie']=array();
        $data['categorie'] = $this->admin_model->get_list_categorie();
		$this->load->view('ParaCategorie.php',$data);	
	}
    public function paracatError()
	{
        $data = array();
        $this->load->model('admin_model');
        $data['categorie']=array();
        $data['categorie'] = $this->admin_model->get_list_categorie();
        $data['mess'] = 'Hamarino tsara ny categoria ho alefanao';
        $data['loko'] = 'red';
		$this->load->view('ParaCategorie.php',$data);	
	}
    public function paracatError1()
	{
        $data = array();
        $this->load->model('admin_model');
        $data['categorie']=array();
        $data['categorie'] = $this->admin_model->get_list_categorie();
        $data['messe'] = 'Hamarino tsara ny categoria ho alefanao';
        $data['loko'] = 'red';
		$this->load->view('ParaCategorie.php',$data);
	}
    public function paracatOke()
	{
        $data = array();
        $this->load->model('admin_model');
        $data['categorie']=array();
        $data['categorie'] = $this->admin_model->get_list_categorie();
        $data['mess'] = 'Tafiditra ny kategoria vaovao nampidirinao';
        $data['loko'] = 'blue';
		$this->load->view('ParaCategorie.php',$data);
	}
    public function paracatOke1()
	{
        $data = array();
        $data['categorie'] = array();
        $data['categorie']=array();
        $this->load->model('admin_model');
        $data['categorie'] = $this->admin_model->get_list_categorie();
        $data['messe'] = 'Voahova ny kategoria namboarinao';
        $data['loko'] = 'blue';
		$this->load->view('ParaCategorie.php',$data);	
	}
    public function aculog()
	{
		$this->load->view('AccueilAdmin.php');	
	}
    public function stat()
	{
        $data = array();
        $this->load->model('admin_model');
        $data['cmembre'] = $this->admin_model->get_number_user();
        $data['cfait'] = $this->admin_model->get_number_fait();
		$this->load->view('Stat.php',$data);	
	}
    public function newCattrait(){
        $categorie = $this->input->post('newcat');
        if(strlen(trim($categorie))==0){
            redirect('admincnt/paracatError');	
        }else{
            $this->load->model('admin_model');
            $this->admin_model->insert_new_Categorie($categorie);
            redirect('admincnt/paracatOke');	
        }   
    }
    public function updateCat(){
        $new = $this->input->post('nouvcat');
        $old = $this->input->post('anccat');
        if(strlen(trim($new))==0){
            redirect('admincnt/paracatError1');	
        }else if(strlen(trim($old))==0){
            redirect('admincnt/paracatError1');
        }else{
            $this->load->model('admin_model');
            $val = $this->admin_model->update_the_Categorie($new,$old);
            redirect('admincnt/paracatOke1');
        }   
    }
}