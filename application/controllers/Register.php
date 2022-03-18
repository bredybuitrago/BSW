<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('login/v_register');
	}

	public function Register_user(){
		print_r($this->input->post('nombre'));
		print_r($this->input->post('usuario'));
		print_r($this->input->post('correo'));
		print_r($this->input->post('password'));
		print_r($this->input->post('password_2'));
		print_r($this->input->post('terms'));


		
		
		
		
		
		
	}

}

