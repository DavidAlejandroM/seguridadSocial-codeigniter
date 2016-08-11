<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagos extends CI_Controller {

	function __construct() {

		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		$method = $_SERVER['REQUEST_METHOD'];
		if($method == "OPTIONS") {
			die();
		}
		parent::__construct();
	}
	public function obtenerPagos()
	{
		$this->load->model('pagos_model');
		$usuarios = $this->pagos_model->obtenerTodo();

        $json = json_encode($usuarios);
		print_r($json);
	}

	public function obtenerPagosUsuario($idEmpresa,$cantidad)
	{
		$this->load->model('pagos_model');
		$usuarios = $this->pagos_model->obtenerPagos($idEmpresa,$cantidad);

		$json = json_encode($usuarios);
		print_r($json);
	}
}
