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

			$cantidad_horas = $this->input->post('data')['cantidad_horas'];
			$lote = $this->Dao_reserva_model->get_max_lote() + 1;
			$hora = $this->input->post('data')['hora_inicio'];
			$franja = $this->input->post('data')['franja_inicio'];
			$hora_sumada = [];


			for ($i=1; $i <= $cantidad_horas; $i++) { 
				
				$reserva['cancha_id'] = $this->input->post('data')['cancha_id'];
				$reserva['usuario_id'] = 15;
				$reserva['fecha'] = $this->input->post('data')['fecha'];
				$reserva['hora'] = $hora;
				$reserva['franja'] = $franja;
				$reserva['lote'] = $lote;

				$this->Dao_reserva_model->insert_reserva($reserva);

				$hora_sumada = $this->sumar_hora("$hora$franja", 1);
				$hora = $hora_sumada[0];
				$franja = $hora_sumada[1];
			}



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

	public function sumar_hora($hora, $cant_hora_a_sumar){
		$fecha = date_create("$hora");
		date_add($fecha, date_interval_create_from_date_string("$cant_hora_a_sumar hour"));
		$hora = str_replace(' ', '', date_format($fecha," g:a"));
		return explode(":", $hora);
	}


}

/* End of file Servicios.php */
/* Location: ./application/controllers/Servicios.php */