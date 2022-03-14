<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	
	public function index()
	{
		// echo base_url();
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		// $this->load->view('inicio');
		$this->load->view('layout/footer');
	}
}
