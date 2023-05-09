<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Produit_interaction extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('Produit_model');
        }

        public function index(){
            $this->load->view("Insert_Produit");
            if ($this->session->flashdata('success_message')) {
                echo '<script>alert("' . $this->session->flashdata('success_message') . '");</script>';
            }
        }

        public function insererProduit(){
            $nomProduit = $_POST['nomProduit'];
            if(!empty($nomProduit)){
                $this->Produit_model->inserer($nomProduit);
                $this->session->set_flashdata('success_message', 'Inseree avec succes.');
                redirect(base_url("index.php/produit_interaction/index"));
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
