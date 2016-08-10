<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	public function index()
	{
		$this->load->model('usuarios_model');
		$usuarios = $this->usuarios_model->obtenerTodo();

        $json = json_encode($usuarios);
		print_r($json);
	}
}
