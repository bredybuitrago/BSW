<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Canchas extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('data/Dao_cancha_model');
    }

	public function index()
	{
		
	}

	public function Get_all_barrios(){
		$canchas = $this->Dao_cancha_model->getAllBarrios();
		echo json_encode($canchas);
	}

	public function Get_all_canchas_activas(){
		$order_by = $this->input->post('order_by');
		$canchas = $this->Dao_cancha_model->Get_all_canchas_activas($order_by);
		echo json_encode($canchas);
	}

	public function Get_all_locales_activos(){
		$order_by = $this->input->post('order_by');
		$locales = $this->Dao_cancha_model->Get_all_locales_activos($order_by);
		echo json_encode($locales);	
	}

	public function Get_all_tipo_canchas(){
		$tipo_canchas = $this->Dao_cancha_model->Get_all_tipo_canchas();
		echo json_encode($tipo_canchas);
	}

	public function Get_all_local_by_empresa_session(){

		$locales = $this->Dao_cancha_model->GetDdlLocalsByEmpresaId($this->session->empresa_id);
		echo json_encode($locales);
	}

	public function Get_local_by_local_id(){
		$local_id = $this->input->post('data')['local_id'];

		$local = $this->Dao_cancha_model->GetLocalByLocalId($local_id);
		$horario = $this->Dao_cancha_model->GetHorarioByHorarioId($local->horario_id);
		$local->horario = $horario;

		echo json_encode($local);
	}

	public function Get_all_locales_cordenades(){
		$locales = $this->Dao_cancha_model->GetAllLocalsCordenates();
		echo json_encode($locales);
	}

	

	public function Register_local(){
		try {
				
			$datosHorario = array();
			$datosLocal = array();


			// tratamiento para tabla de horario
			$datosHorario['dias'] = $this->input->post('data')['dias'];
			$datosHorario['hora_inicio'] = $this->input->post('data')['hora_inicio'];
			$datosHorario['hora_fin'] = $this->input->post('data')['hora_fin'];

			$id_horario = $this->Dao_cancha_model->Get_or_insert_horario_cancha($datosHorario);

			// tratamiento para tabla cancha
			$datosLocal['empresa_id'] = $this->session->empresa_id;
			$datosLocal['horario_id'] = $id_horario;
			$datosLocal['nombre_local'] = $this->input->post('data')['nombre_local'];
			$datosLocal['barrio_id'] = $this->input->post('data')['barrio'];
			$datosLocal['numero_canchas'] = $this->input->post('data')['numero_canchas'];
			$datosLocal['contacto'] = $this->input->post('data')['contacto'];
			$datosLocal['correo'] = $this->input->post('data')['correo'];
			$datosLocal['administrador'] = $this->input->post('data')['administrador'];
			$datosLocal['direccion'] = $this->input->post('data')['direccion'];
			$datosLocal['estado_id'] = 1;
			$datosLocal['cordenadas_lat'] = $this->input->post('data')['coordenadas_lat'];
			$datosLocal['cordenadas_lon'] = $this->input->post('data')['coordenadas_lon'];
			$datosLocal['descripcion'] = $this->input->post('data')['descripcion_local'];

			$this->Dao_cancha_model->insert_local($datosLocal);

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

	public function Register_cancha(){
		try {
			$datosCancha = array();

			// tratamiento para tabla de cancha
			$datosCancha['local_id'] = $this->input->post('data')['local_id'];
			$datosCancha['tipo_cancha_id'] = $this->input->post('data')['tipo_cancha'];
			$datosCancha['tarifa_por_hora'] = $this->input->post('data')['tarifa_por_hora'];
			$datosCancha['estado_id'] = ($this->input->post('data')['estado_id'] == 'true')? 1 : 2;
			$datosCancha['observacion'] = $this->input->post('data')['observacion'];
			$datosCancha['identificacion'] = $this->input->post('data')['identificacion'];

			$this->Dao_cancha_model->insert_cancha($datosCancha);

			$datos = array(
				'message' => 'cancha registrada correctamente',
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

	public function Actualizar_cancha(){
		try {
			$datosCancha = array();

			// tratamiento para tabla de cancha
			$datosCancha['cancha_id'] = $this->input->post('data')['cancha_id'];
			$datosCancha['local_id'] = $this->input->post('data')['local_id'];
			$datosCancha['tipo_cancha_id'] = $this->input->post('data')['tipo_cancha'];
			$datosCancha['tarifa_por_hora'] = $this->input->post('data')['tarifa_por_hora'];
			$datosCancha['estado_id'] = ($this->input->post('data')['estado_id'] == 'true')? 1 : 2;
			$datosCancha['observacion'] = $this->input->post('data')['observacion'];
			$datosCancha['identificacion'] = $this->input->post('data')['identificacion'];

			$this->Dao_cancha_model->update_cancha($datosCancha);

			$datos = array(
				'message' => 'cancha registrada correctamente',
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


	public function Reservar_cancha($local_id){

		$data['local_id'] = $local_id;

		$this->load->view('layout/header_inicio');
		$this->load->view('layout/menu_inicio');
		$this->load->view('v_reservar_cancha', $data);
		$this->load->view('layout/footer');
			
		
	}

	public function get_data_local(){
		$local_id = $this->input->post('local_id');	
		$local = $this->Dao_cancha_model->GetDataLocalByLocalId($local_id);

		$local->fotos = $this->Dao_cancha_model->GetFotosByLocalId($local_id);

		echo json_encode($local);
	}

	public function get_data_canchas_local(){
		$local_id = $this->input->post('local_id');	
		$fecha = $this->input->post('fecha');	
		$canchas = $this->Dao_cancha_model->GetCanchasByLocalId($local_id);

		foreach ($canchas as $indice => $cancha) {
			$canchas[$indice]->reservas = $this->Dao_cancha_model->GetReservasByCanchaId($canchas[$indice]->cancha_id, $fecha);
		}

		echo json_encode($canchas);

	}

	public function Get_barrios_locales(){
		$barrios_locales = $this->Dao_cancha_model->GetBarriosLocales();
		if ($barrios_locales) {
			foreach ($barrios_locales as $indice => $barrio) {
				$barrios_locales[$indice]->data = $this->Dao_cancha_model->GetLocalesByBarrioId($barrio->barrio_id);
			}
		}

		echo json_encode($barrios_locales);
	}

	public function set_reservar_cancha(){
		// tratamiento para tabla de horario
		$reserva['cancha_id'] = $this->input->post('data')['cancha_id'];
		$reserva['usuario_id'] = 15;
		$reserva['hora_inicio'] = $this->input->post('data')['hora_inicio'];
		$reserva['franja_inicio'] = $this->input->post('data')['franja_inicio'];
		$reserva['hora_fin'] = $this->input->post('data')['hora_fin'];
		$reserva['franja_fin'] = $this->input->post('data')['franja_fin'];
		$reserva['cantidad_horas'] = $this->input->post('data')['cantidad_horas'];


		echo json_encode($barrios_locales);
	}

}

