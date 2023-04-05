<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class new_model extends CI_Model {
    public function get_info() {
        return array('auteur' => 'Mc Donald',
                    'date' => '24/07/05'
    );
    }
}
