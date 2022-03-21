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
		$datos = array();
		$usuarioByusuario = $this->Dao_user_model->getUserByUser($this->input->post('data')['usuario']);

		if ($usuarioByusuario) {
			$datos = array(
					'message' => 'El usuario ya existe',
					'codigo' => '001',
					'success' => false
				);

			echo json_encode($datos);
			return;			
		} 

		$usuarioByCorreo = $this->Dao_user_model->getUserByEmail($this->input->post('data')['correo']);
		if ($usuarioByCorreo) {
			$datos = array(
					'message' => 'El correo digitado ya está asociado a una cuenta',
					'codigo' => '002',
					'success' => false
				);

			echo json_encode($datos);
			return;			
		} 

		$params = $this->input->post('data');
		$params['password'] = $this->encrypt->sha1($this->input->post('data')['password']);
		$params['perfil_id'] = 1;
		$params['identificacion'] = '';
		$params['estado_id'] = 1;
		if($this->Dao_user_model->insertUser($params) > 0){
			$datos = array(
					'message' => 'Usuario registrado correctamente',
					'codigo' => '003',
					'success' => true
			);
		}	else {
			$datos = array(
					'message' => 'Existió un error al registrar',
					'codigo' => '004',
					'success' => false
				);

		}
		echo json_encode($datos);

	}

	public function login_user()
	{
		$params['correo'] = $this->input->post('data')['correo'];
		$params['password'] = $this->encrypt->sha1($this->input->post('data')['password']);

		$usuario = $this->Dao_user_model->getUserByEmailAndPassword($params);

		if ($usuario) {
			$response = array(
					'message' => $usuario,
					'codigo' => '005',
					'success' => true
			);

			$this->session->set_userdata($usuario);
		} else {
			$response = array(
					'message' => 'Error en las credenciales',
					'codigo' => '005',
					'success' => false
			);
		}

		echo json_encode($response);
	}

}

