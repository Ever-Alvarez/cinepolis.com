<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinepolis_model extends CI_Model{
  
  public function __construct(){
    //Constructor para cargar la bd een todas las funciones
    $this->load->database();
  }

  public function listaPeliculas(){

    //query para llamar la tabla y sus campos.
    /* 
      Se esta uniendo las tablas con LEFT JOIN para llamar a datos especificos
      cinepolis = base de datos, lo que va despues del punto es la tabla de la base de datos
      P = cinepolis.tb_peliculas, D = cinepolis.tb_director, PR = cinepolis.tb_productora
    */  
    $query = $this->db->query(
      "SELECT P.id_pelicula, P.titulo, P.clasificacion, P.anio_lanzamiento, P.duracion, P.genero, P.sinopsis,
      D.nombre AS director, D.paterno, PR.nombre AS productora
      FROM tb_peliculas P
      LEFT JOIN tb_directores D ON P.id_director = D.id_director
      LEFT JOIN tb_productoras PR ON P.id_productora = PR.id_productora
      "
    );

    return $query->result();
  }
}
