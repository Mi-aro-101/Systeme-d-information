<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormulaireAjoutEntite extends CI_Controller {

	public function index()
	{
        $this->template->write('title', 'Insertion ENtite', TRUE);
        $this->template->write_view('content', 'Formulaire', '' , TRUE);
        $this->template->render();    
	}
}
