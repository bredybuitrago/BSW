<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrarServicio extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header_aliado');
		$this->load->view('layout/menu_aliado');
		$this->load->view('v_registrar_servicio');
		$this->load->view('layout/footer');
	}

}

/* End of file registrarServicio.php */
/* Location: ./application/controllers/RegistrarServicio.php */