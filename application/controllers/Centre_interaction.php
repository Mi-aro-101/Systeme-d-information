<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Centre_interaction extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('Centre_model');
        }

        public function index(){
            $this->load->view("Template");
            $this->load->view("Insert_Centre");
            if ($this->session->flashdata('success_message')) {
                echo '<script>alert("' . $this->session->flashdata('success_message') . '");</script>';
            }
        }

        public function insererCentre(){
            $nomCentre = $_POST['nomCentre'];
            $nature = $_POST['nature'];
            if(!empty($nomCentre) && !empty($nature)){
                $this->Centre_model->inserer($nomCentre, $nature);
                $this->session->set_flashdata('success_message', 'Inseree avec succes.');
                redirect(base_url("index.php/centre_interaction/index"));
            }
            else{
                $message = "Ne pas laisser le champ vide";
                $str1 = '<script language="javascript">alert("%s"); window.history.back();</script>';
                $str1 = sprintf($str1, $message);
                echo $str1;
            }
        }
    }
?>
