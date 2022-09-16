<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestor extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('data/Dao_cancha_model');
        $this->load->model('data/Dao_fotos_local_model');
        $this->load->helper('url');
    }

	public function index()
	{
	}

	public function recibirArchivos(){

		$data = array();
        if($this->input->post('hiden_local_id') && !empty($_FILES['uploadedFile']['name'])){
			$flujo_correcto = true;

        	//Validar si existe la carpeta con el id
        	$path = "uploads/" . $this->input->post('hiden_local_id');

			if (!file_exists($path)) {
			    mkdir($path, 0777, true);
			}

            $filesCount = count($_FILES['uploadedFile']['name']);

            for($i = 0; $i < $filesCount; $i++){

				// // get details of the uploaded file
				$fileTmpPath = $_FILES['uploadedFile']['tmp_name'][$i];
				$fileName = $_FILES['uploadedFile']['name'][$i];
				$fileSize = $_FILES['uploadedFile']['size'][$i];
				$fileType = $_FILES['uploadedFile']['type'][$i];
				$fileNameCmps = explode(".", $fileName);
				$fileExtension = strtolower(end($fileNameCmps));

		        $newFileName = str_replace(" ", "", $fileName); 
		        $newFileName =  time() . "_" . $newFileName; 

				// directory in which the uploaded file will be moved
				$uploadFileDir = $path . '/';
				$dest_path = $uploadFileDir . $newFileName;
				 
				if(move_uploaded_file($fileTmpPath, $dest_path))
				{
				  	$datosFotos['local_id'] = $this->input->post('hiden_local_id');
					$datosFotos['ruta'] = $dest_path;
					$datosFotos['estado_id'] = 1;

					$this->Dao_fotos_local_model->insert_foto_local($datosFotos);

				}
				else
				{
					$flujo_correcto = false;
				}
               
            }

            if ($flujo_correcto) {
            	$this->session->set_flashdata('response', 'Imágenes guardadas correctamente');
            } else {
            	$this->session->set_flashdata('response', 'Existió un error al guardar la imágenes');
            }
        }

        redirect("RegistrarServicio");

	}

}
