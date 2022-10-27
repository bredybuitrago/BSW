<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserva extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('data/Dao_reserva_model');
    }

	public function index()
	{
		
	}

	public function set_reservar_cancha(){
		try {

			// tratamiento para tabla de horario
			$reserva['cancha_id'] = $this->input->post('data')['cancha_id'];
			$reserva['usuario_id'] = 15;
			$reserva['fecha'] = $this->input->post('data')['fecha'];
			$reserva['hora_inicio'] = $this->input->post('data')['hora_inicio'];
			$reserva['franja_inicio'] = $this->input->post('data')['franja_inicio'];
			$reserva['hora_fin'] = $this->input->post('data')['hora_fin'];
			$reserva['franja_fin'] = $this->input->post('data')['franja_fin'];
			$reserva['cantidad_horas'] = $this->input->post('data')['cantidad_horas'];

			$this->Dao_reserva_model->insert_reserva($reserva);

			$datos = array(
				'message' => 'cancha registrada correctamente',
				'codigo' => '003',
				'success' => true
			);

		} catch (Exception $e) {
			$datos = array(
				'message' => 'Error al reservar',
				'codigo' => '004',
				'success' => false,
				'error_detail' => $e
			);			
		}
		
		echo json_encode($datos);
	}


}

/* End of file Servicios.php */
/* Location: ./application/controllers/Servicios.php */