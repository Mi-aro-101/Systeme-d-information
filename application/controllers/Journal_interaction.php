<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journal_interaction extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Codejournal_model');
        $this->load->model('Devise_model');
        $this->load->model('Comptable_model');
        $this->load->model('Tiers_model');
        $this->load->model('Exercice_model');
        $this->load->model('Journal_model');
        $this->load->model('Produit_model');
        $this->load->model('Centre_model');
        $this->load->model('Parametre_model');
    }

	public function index()
	{
        $CodeJournal = $this->Codejournal_model->findAll();
        $Devise = $this->Devise_model->findAll();
        $Total = array('Devise' => $Devise, 'CodeJournal' => $CodeJournal);

        if ($this->session->flashdata('success_message')) {
            echo '<script>alert("' . $this->session->flashdata('success_message') . '");</script>';
        }

        $this->template->write('title', 'Journal', TRUE);
        $this->template->write_view('content', 'FormJournal', $Total);
        $this->template->render();
	}

    public function Inserer(){
        $date = $_GET['date'];
        try {
            $this->Exercice_model->checkDate($date);
            $plancomptable = $this->Comptable_model->getbyEntity($_SESSION['identity']);
            $plantiers = $this->Tiers_model->getbyEntity($_SESSION['identity']);
            $produits = $this->Produit_model->findAll();
            $centres = $this->Centre_model->findAll();
            $Total = array('date' => $date,
                          'plancomptable' => $plancomptable,
                          'plantiers' => $plantiers,
                          'produits' => $produits,
                          'centres' => $centres
                        );
            $this->template->write('title', 'Journal', TRUE);
            $this->template->write_view('content', 'Insert_journal', $Total);
            $this->template->render();
        } catch (Exception $e) {
            $str1 = '<script language="javascript">alert("%s");window.history.back();</script>';
            $str1 = sprintf($str1, $e->getMessage());
            echo $str1;
        }
    }

//Manomboka eto ny fonction micontroller ireo donnees inserer avy any @ journal ao ahhhh !!

    public function sum($tabo){
        $valo = 0;
        foreach($tabo as $tab){
            (double)$valo+=(double)$tab;
        }

        return $valo;
    }

    //Equilibrer debit sy credits
    public function Equilibrer($lesCredits, $lesDebits){
        $val = 0;

        $sumcredit = $this->sum($lesCredits);
        $sumdebit = $this->sum($lesDebits);

        if(($sumcredit - $sumdebit) != 0){
            throw new Exception("Vos calculs ne sont pas equilibres, veuillez recommencez");
        }

        return true;
    }

    //Controller les valeurs
    public function Control($nbrCentre, $Cout_unite_oeuvre, $Quantite, $credit, $debit){
        // Control des pourcentages par centre ;; sum(pourcentage) = 100
        $sum = 0;
        for($i = 0 ; $i < $nbrCentre ; $i++){
            $sum+=intval($_POST['pourcentage'.$i]);
        }

        if($sum != 100){throw new Exception("La repartition par centre n'est pas equilibre ");}

        // Controle si Cout unite d'oeuvre*quantite != Credit/Debit
        if(intval($credit) == 0){
            if(intval($debit) != $Cout_unite_oeuvre*$Quantite){
                throw new Exception("Cout d'ouevre et quantite ne correspond pas au debit");
            }
        }
        else{
            if(intval($credit)!= $Cout_unite_oeuvre*$Quantite){
                throw new Exception("Cout d'ouvre et quantite ne correspond pas au credit");
            }
        }
    }

    //Miassurer hoe tena compte fournisseur ihany na client no tokony hisy compte tiers

    public function Verifier(){
        $date = $_POST['date'];
        // $codejournal = $_POST['codejournal'];
        $piece = $_POST['piece'];
        $Comptable = $_POST['Comptable'];
        $Tiers = $_POST['Tiers'];
        $Libelle = $_POST['Libelle'];
        $lesDebits = $_POST["Debit"];
        $lesCredits = $_POST["Credit"];

        // Pour les charges
        $idCentre = $_POST['idcentre'];
        $idProduit = $_POST['idproduit'];
        $statut = $_POST['Statut'];
        $Unite_oeuvre = $_POST['Unite_oeuvre'];
        $Cout_unite_oeuvre = $_POST['Cout_unite_oeuvre'];
        $Quantite = $_POST['Quantite'];


        try {
            $this->Equilibrer($lesCredits, $lesDebits);
            for($i = 0 ; $i < count($Comptable) ; $i++){
                $plancomptable = $this->Comptable_model->getbyId($Comptable[$i]);

                if(empty($lesCredits[$i])){ $lesCredits[$i] = 0;}
                else if(empty($lesDebits[$i])){ $lesDebits[$i] = 0;}
                if(empty($Tiers[$i])){ $Tiers[$i] = 'null'; }
                if(empty($piece[$i])){ $piece[$i] = 'null'; }
                $this->Journal_model->insert($date, $piece[$i], $Comptable[$i], $Tiers[$i], $Libelle[$i], $lesDebits[$i], $lesCredits[$i]);
                if($plancomptable['code'][0] == '6'){
                    $nbrCentre = intval($_POST['Centre_nbr']);

            $this->Control($nbrCentre, $Cout_unite_oeuvre, $Quantite, $lesCredits[$i], $lesDebits[$i]);

                    for($j = 0 ; $j < $nbrCentre ; $j++){
                        $lesPourcentages = $_POST['pourcentage'.$j];
                        $this->Parametre_model->inserer(
                            $date,
                            $idCentre[$j],
                            $idProduit[$i],
                            $lesPourcentages,
                            $statut,
                            $Unite_oeuvre,
                            $Cout_unite_oeuvre,
                            $Quantite,
                            $Libelle[$i]
                        );
                    }
                }
            }

            $this->session->set_flashdata('success_message', 'Inseree avec succes.');
            redirect(base_url("index.php/Journal_interaction/index"), 'refresh');

        } catch (Exception $e) {
            $str1 = '<script language="javascript">alert("%s"); window.history.back();</script>';
            $str1 = sprintf($str1, $e->getMessage());
            echo $str1;
        }

    }
}
?>
