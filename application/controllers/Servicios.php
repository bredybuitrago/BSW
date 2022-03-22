<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header_inicio');
		$this->load->view('layout/menu_inicio');
		$this->load->view('v_servicios');
		$this->load->view('layout/footer');
	}

}

/* End of file Servicios.php */
/* Location: ./application/controllers/Servicios.php */