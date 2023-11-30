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

    $this->load->view('header', $data);
    $this->load->view('index');
    $this->load->view('footer');
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
  
    $this->load->view('header', $data);
    $this->load->view('peliculas/index', $data);
    //$this->load->view('footer');

  }

}
