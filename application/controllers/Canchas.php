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

	public function Get_all_canchas(){
		$canchas = $this->Dao_cancha_model->getAllBarrios();
		echo json_encode($canchas);
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

}

/* End of file canchas.php */
/* Location: ./application/controllers/canchas.php */