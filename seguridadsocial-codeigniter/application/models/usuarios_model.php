<?php
    class Usuarios_model extends CI_Model
    {
        public function obtenerTodo(){
            $q = $this->db->get('tblusuarios');
            return $q->result();
        }

        public function obtenerUsuario($idEmpresa){
            $q = $this->db->query("SELECT * FROM `tblusuarios` WHERE `strIdEmpresa` = '".$idEmpresa."' ");
            return $q->row();

        }
    }