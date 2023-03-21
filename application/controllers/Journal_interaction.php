<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journal_interaction extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('Insert_journal');
	}

    public function sum($tabo){
        $valo = 0;
        foreach($tabo as $tab){
            $valo+=(double)$tab;
        }

        return $valo;
    }

    public function Equilibrer(){
        $val = 0;
        $lesDebits = $_POST["Debit"];
        $lesCredits = $_POST["Credit"];

        $sumcredit = $this->sum($lesCredits);
        $sumdebit = $this->sum($lesDebits);

        if(($sumcredit - $sumdebit) == 0){
            $val = 1;
        }

        echo $val;
    }
}
