<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinepolis_model extends CI_Model{
  
  public function __construct(){
    //Constructor para cargar la bd een todas las funciones
    $this->load->database();
  }

  // public function index(){
  //   //query para llamar la tabla y sus campos.
  //   /* 
  //     Se esta uniendo las tablas con LEFT JOIN para llamar a datos especificos
  //     cinepolis = base de datos, lo que va despues del punto es la tabla de la base de datos
  //     P = cinepolis.tb_peliculas, D = cinepolis.tb_director, PR = cinepolis.tb_productora
  //   */  
  //   $query = $this->db->query(
  //     "SELECT P.id, P.titulo, P.clasificacion, P.anio_de_lanzamiento, P.duracion, P.genero, P.sinopsis, D.nombre_director, D.apellido_P, PR.nombre_productora 
  //     FROM cinepolis.tb_peliculas P
  //     LEFT JOIN cinepolis.tb_director D ON P.id_director = D.id
  //     LEFT JOIN cinepolis.tb_productora PR ON P.id_productora = PR.id
  //     "
  //   );

  //   return $query->result();
  // }

  public function listaPeliculas(){

    //query para llamar la tabla y sus campos.
    /* 
      Se esta uniendo las tablas con LEFT JOIN para llamar a datos especificos
      cinepolis = base de datos, lo que va despues del punto es la tabla de la base de datos
      P = cinepolis.tb_peliculas, D = cinepolis.tb_director, PR = cinepolis.tb_productora
    */  
    $query = $this->db->query(
      "SELECT P.id, P.titulo, P.clasificacion, P.anio_de_lanzamiento, P.duracion, P.genero, P.sinopsis,
      D.nombre AS director, D.apellido_P, PR.nombre AS productora
      FROM cinepolis.tb_peliculas P
      LEFT JOIN cinepolis.tb_director D ON P.id_director = D.id
      LEFT JOIN cinepolis.tb_productora PR ON P.id_productora = PR.id
      "
    );

    return $query->result();
  }
}
