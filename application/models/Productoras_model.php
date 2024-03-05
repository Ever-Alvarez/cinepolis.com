<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productoras_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function listaProductoras() {
        $query = $this->db->query(
            "SELECT * FROM tb_productoras WHERE estatus = 1"
        );

        return $query->result();
    }
}