<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actores extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index() {
        $this->load->model('Cinepolis_model');
        $actores = $this->Cinepolis_model->listaActores();

        $data = [
            'title' => 'Cinepolis - Actores',
            'actores' => $actores
        ];

        $this->load->view('plantillas/header', $data);
        $this->load->view('actores/index', $data);
    }
}