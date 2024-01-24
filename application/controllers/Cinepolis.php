<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinepolis extends CI_Controller{

  public function __construct(){
    parent::__construct();
  }

  public function index(){

    $data = [
      'title' => 'Cinépolis - Página de inicio',
    ];

    $this->load->view('plantillas/header', $data);
    $this->load->view('index');
    $this->load->view('plantillas/footer');
  }

  public function peliculas(){

    $this->load->model('Cinepolis_model');
    $peliculas = $this->Cinepolis_model->listaPeliculas();
    
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

  public function actores() {

    $this->load->model('Cinepolis_model');
    $actores = $this->Cinepolis_model->listaActores();

    $data = [
      'title' => 'Cinepolis - Actores',
      'actores' => $actores
    ];

    $this->load->view('plantillas/header', $data);
    $this->load->view('actores/index');
    $this->load->view('plantillas/footer');

  }

  public function directores() {
    $this->load->model('Cinepolis_model');
    $directores = $this->Cinepolis_model->listaDirectores();

    $data = [
      'title' => 'Cinepolis - Directores',
      'directores' => $directores
    ];

    $this->load->view('plantillas/header', $data);
    $this->load->view('directores/index', $data);
    $this->load->view('plantillas/footer');
  }

  public function productoras() {

    $this->load->model('Cinepolis_model');
    $productoras = $this->Cinepolis_model->listaProductoras();

    $data = [
      'title' => 'Cinepolis - Productoras',
      'productoras' => $productoras
    ];

    $this->load->view('plantillas/header', $data);
    $this->load->view('productoras/index', $data);
    $this->load->view('plantillas/footer');
  }

}
