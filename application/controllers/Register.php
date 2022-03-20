<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('data/Dao_user_model');
        $this->load->library('encrypt');
    }

	public function index()
	{
		$this->load->view('login/v_register');
	}

	public function Register_user(){

		print_r($this->Dao_user_model->getUserByUser($this->input->post('usuario')));
		print_r($this->encrypt->sha1($this->input->post('password')));

		$params['nombre'] = $this->input->post('nombre');
		$params['usuario'] = $this->input->post('usuario');
		$params['correo'] = $this->input->post('correo');
		$params['password'] = $this->encrypt->sha1($this->input->post('password'));
		$params['perfil_id'] = 1;
		$params['identificacion'] = '';
		$params['estado_id'] = 1;

		// print_r($this->Dao_user_model->insertUser($params));		
		
		
		
		
		
		
	}

}

