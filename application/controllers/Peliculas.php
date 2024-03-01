<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peliculas extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){

        $this->load->model('Peliculas_model');
        $peliculas = $this->Peliculas_model->listaPeliculas();
        
        $data = [
            'title' => 'Cinépolis - Peliculas',
            'peliculas' => $peliculas
        ];

        //echo"<pre>";
        //print_r($peliculas);
        //echo"</pre>";
        
        $this->load->view('plantillas/header', $data);
        $this->load->view('peliculas/index', $data);
        // $this->load->view('plantillas/footer');

    }

}