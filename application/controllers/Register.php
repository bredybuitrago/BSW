<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('data/Dao_user_model');
        $this->load->model('data/Dao_company_model');
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
		$params['empresa_id'] = 1;

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

	public function Register_ally_user(){
		try {
				
			$datosUsuario = array();
			$datosEmpresa = array();
			$empresa_id;

			// Validar si el usuario ya existe
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

			$empresaByNit = $this->Dao_company_model->getCompanyByNit($this->input->post('data')['nit']);
			if (!$empresaByNit) {
				$datosEmpresa['nombre_empresa'] = $this->input->post('data')['nombre_empresa'];
				$datosEmpresa['nit'] = $this->input->post('data')['nit'];
				$datosEmpresa['correo_empresa'] = $this->input->post('data')['correo_empresa'];
				$datosEmpresa['contacto_empresa'] = $this->input->post('data')['contacto_empresa'];
				$datosEmpresa['nombre_representante'] = $this->input->post('data')['nombre_representante'];
				$datosEmpresa['contacto_representante'] = $this->input->post('data')['contacto_representante'];
				$empresa_id = $this->Dao_company_model->insertCompany($datosEmpresa);
			} else {
				$empresa_id = $empresaByNit->empresa_id;
			}
			
			// Insertar usuario
			$datosUsuario['perfil_id'] = 2;
			$datosUsuario['identificacion'] = $this->input->post('data')['nit'];
			$datosUsuario['usuario'] = $this->input->post('data')['usuario'];
			$datosUsuario['nombre'] = $this->input->post('data')['nombre_empresa'];
			$datosUsuario['correo'] = $this->input->post('data')['correo_empresa'];
			$datosUsuario['password'] = $this->encrypt->sha1($this->input->post('data')['password']);
			$datosUsuario['estado_id'] = 1;
			$datosUsuario['empresa_id'] = $empresa_id;

			$this->Dao_user_model->insertUser($datosUsuario);

			$datos = array(
				'message' => 'registrado correctamente',
				'codigo' => '003',
				'success' => true
			);

		} catch (Exception $e) {
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
		$params['correo'] = $this->input->post()['correo'];
		$params['password'] = $this->encrypt->sha1($this->input->post()['Password']);

		$usuario = $this->Dao_user_model->getUserByEmailAndPassword($params);

		if ($usuario) {
			$this->session->set_userdata($usuario);

			redirect('RegistrarServicio');


		} else {

			$data['msg'] = array("error" => true, "message" => 'Error en las credenciales');
			$this->session->set_flashdata('msg', $data);
			redirect('Login');

			// $this->load->view('login/v_login', $data);
		
		}

	}

}

