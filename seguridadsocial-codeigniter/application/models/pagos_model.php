<?php
    class Pagos_model extends CI_Model
    {
        public function obtenerTodo(){
            $q = $this->db->get('tblpagos');
            return $q->result();
        }

        public function obtenerPagos($idEmpresa,$cantidad){
            $sql = "SELECT * FROM `tblpagos` WHERE `strIdEmpresa` = '".$idEmpresa."' ORDER BY `intIdRecibo` DESC LIMIT ".$cantidad;
            $q = $this->db->query($sql);
            return $q->result();

        }
    }