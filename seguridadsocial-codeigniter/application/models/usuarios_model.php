<?php
    class Usuarios_model extends CI_Model
    {
        public function obtenerTodo()
        {
            $q = $this->db->get('tblusuarios');
            return $q->result();
        }
    }