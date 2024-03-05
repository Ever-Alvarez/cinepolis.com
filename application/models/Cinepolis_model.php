<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinepolis_model extends CI_Model{
  
  public function __construct(){
    //Constructor para cargar la bd een todas las funciones
    $this->load->database();
  }

  // public function listaPeliculas() {

  //   //query para llamar la tabla y sus campos.
  //   /* 
  //     Se esta uniendo las tablas con LEFT JOIN para llamar a datos especificos
  //     cinepolis = base de datos, lo que va despues del punto es la tabla de la base de datos
  //     P = cinepolis.tb_peliculas, D = cinepolis.tb_director, PR = cinepolis.tb_productora
  //   */  
  //   $query = $this->db->query(
  //     "SELECT P.id_pelicula, P.clasificacion, P.titulo, P.anio_lanzamiento, P.duracion, P.genero, P.sinopsis,
  //     D.nombre AS director, D.paterno, PR.nombre AS productora
  //     FROM tb_peliculas P
  //     LEFT JOIN tb_directores D ON P.id_director = D.id_director
  //     LEFT JOIN tb_productoras PR ON P.id_productora = PR.id_productora
  //     "
  //   );

  //   return $query->result();
  // }

  // public function listaActores() {
  //   $query = $this->db->query(
  //     "SELECT id_actor, nombre, materno, fecha_nacimiento FROM tb_actores"
  //   );

  //   return $query->result();
  // }

  // public function listaDirectores() {
  //   $query = $this->db->query(
  //     "SELECT id_director, nombre, paterno FROM tb_directores WHERE estatus = 1"
  //   );

  //   return $query->result();
  // }

  // public function listaProductoras() {
  //   $query = $this->db->query(
  //     "SELECT * FROM tb_productoras WHERE estatus = 1"
  //   );

  //   return $query->result();
  // }
}
