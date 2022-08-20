<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrincipalAliado extends CI_Controller {


	public function __construct() {
        parent::__construct();
        $this->load->model('data/Dao_cancha_model');
    }

	public function index()
	{
		$this->load->view('layout/header_aliado');
		$this->load->view('layout/menu_aliado');
		$this->load->view('v_principal_aliado');
		$this->load->view('layout/footer');
	}

	public function c_traerCanchasAliados(){
		try {
			$datos = array();
			$idAliado = $this->session->usuario_id;

			
			$canchas = $this->Dao_cancha_model->getCanchasByIdAliado($idAliado);

			$retorno = array(
	            'canchas' => $canchas,
	            'message' => '',
				'codigo' => '003',
				'success' => true
	        );

		} catch (Exception $e) {
			$retorno = array(
				'message' => 'Existió un error al consultar las canchas',
				'codigo' => '004',
				'success' => false
			);
						
		}

		echo json_encode($retorno);
		return;
	}

	public function c_getCanchaById(){
		try {
			$cancha_id = $this->input->post('cancha_id');
			$datos_cancha = $this->Dao_cancha_model->getCanchaByCanchaId($cancha_id);

			$retorno = array(
	            'data' => $datos_cancha,
	            'message' => '',
				'codigo' => '003',
				'success' => true
	        );

		} catch (Exception $e) {
			$retorno = array(
				'message' => 'Existió un error al consultar la cancha',
				'codigo' => '004',
				'success' => false
			);
						
		}

		echo json_encode($retorno);
		return;

	}

}

/* End of file PrincipalAliado.php */
/* Location: ./application/controllers/PrincipalAliado.php */