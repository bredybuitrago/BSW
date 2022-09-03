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
		if(!empty($_FILES['file']['name'])){
				
			// Set preference
			$config['upload_path'] = 'uploads/';	
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['max_size']    = '100'; // max_size in kb
			$config['file_name'] = $_FILES['file']['name'];
					
			//Load upload library
			$this->load->library('upload',$config);		

			print_r("hola inmundo");	
				
			// File upload
			if($this->upload->do_upload('file')){
				// Get data about the file
				$uploadData = $this->upload->data();
			}
		}







	}

	

}
