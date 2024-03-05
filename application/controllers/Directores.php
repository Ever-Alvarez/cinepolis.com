<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Directores extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->model('Directores_model');
        $directores = $this->Directores_model->listaDirectores();

        $data = [
            'title' => 'Cinepolis - Directores',
            'directores' => $directores
        ];

        $this->load->view('plantillas/header', $data);
        $this->load->view('directores/index', $data);
    }

}