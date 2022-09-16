<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dao_fotos_local_model extends CI_Model {

	public function insert_foto_local($datosFotos){
        $this->db->insert('fotos_local', $datosFotos);
        return $this->db->insert_id();
    }	

}

