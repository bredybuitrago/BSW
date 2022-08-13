<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrincipalAliado extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header_aliado');
		$this->load->view('layout/menu_aliado');
		$this->load->view('v_principal_aliado');
		$this->load->view('layout/footer');
	}

}

/* End of file PrincipalAliado.php */
/* Location: ./application/controllers/PrincipalAliado.php */