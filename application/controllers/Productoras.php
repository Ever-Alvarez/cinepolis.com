<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productoras extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->model('Productoras_model');
        $productoras = $this->Productoras_model->listaProductoras();

        $data = [
            'title' => 'Cinepolis - Productoras',
            'productoras' => $productoras
        ];       

        $this->load->view('plantillas/header', $data);
        $this->load->view('productoras/index', $data);
    }
}