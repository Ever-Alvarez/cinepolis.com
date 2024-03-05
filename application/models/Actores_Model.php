<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Actores_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function listaActores() {
        $query = $this->db->query(
            "SELECT id_actor, nombre, materno, fecha_nacimiento FROM tb_actores WHERE estatus = 1"
        );

        return $query->result();
    }
}