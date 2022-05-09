<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('data/Dao_cancha_model');
    }
	
	public function index()
	{
		$data['locales'] = $this->Dao_cancha_model->GetAllLocalsCordenates();

		$this->load->view('layout/header_inicio');
		$this->load->view('layout/menu_inicio');
		$this->load->view('inicio', $data);
		$this->load->view('layout/footer');
	}

}
