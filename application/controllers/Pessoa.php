<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pessoa extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(['formularios', 'validacoes']);
        $this->load->model(['Pessoa_model']);
    }

}
