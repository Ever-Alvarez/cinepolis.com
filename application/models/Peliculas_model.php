<?php
define('BASEPATH') OR exist('No direct script acces allowed');

Class Peliculas_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function listaPeliculas() {
        $query = $this->bd->query(
            "SELECT P.id_pelicula, P.clasificacion, P.titulo, P.anio_lanzamiento, P.duracion, P.genero, P.sinopsis,
            D.nombre AS director, D.paterno, PR.nombre AS productora
            FROM tb_peliculas P
            LEFT JOIN tb_directores D ON P.id_director = D.id_director
            LEFT JOIN tb_productoras PR ON P.id_productora = PR.id_productora
            "
        );

        return $query->result();
    }
}