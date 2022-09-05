<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestor extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('data/Dao_cancha_model');
        $this->load->helper('url');
    }

	public function index()
	{
	}

	public function recibirArchivos(){
		print_r( $this->input->post('hiden_local_id'));
		echo "<pre>";
		print_r($_FILES['uploadedFile']);
		echo "</pre>";


		$data = array();
        if($this->input->post('hiden_local_id') && !empty($_FILES['uploadedFile']['name'])){


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
				  echo 'File is successfully uploaded.';
				}
				else
				{
				  echo 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
				}
               

            }
        }

	}

}
