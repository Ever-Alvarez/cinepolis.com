<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Directores_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function listaDirectores() {
        $query = $this->db->query(
            "SELECT id_director, nombre, paterno, fecha_nacimiento FROM tb_directores WHERE estatus = 1"
        );

        return $query->result();
    }
}